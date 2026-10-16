<?php
/**
 * Security and Utility Functions for FMLDS Website
 */

// Enhanced input sanitization
function sanitizeInput($data) {
    if (is_array($data)) {
        return array_map('sanitizeInput', $data);
    }

    $data = trim($data);
    $data = htmlspecialchars($data, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    return $data;
}

function root_path($path = '') {
    return ROOT_DIR . normalize_site_path($path);
}

function includes_path($file) {
    return INCLUDES_DIR . '/' . basename($file);
}

function page_file_path($relativePath = '') {
    $relativePath = trim(str_replace('\\', '/', (string) $relativePath), '/');

    if ($relativePath === '' || preg_match('(^|/)\.\.(/|$)', $relativePath)) {
        return false;
    }

    return PAGES_DIR . '/' . $relativePath;
}

function include_header($title = null) {
    global $pageTitle;

    if ($title !== null) {
        $pageTitle = $title;
    }

    include includes_path('header.php');
}

function include_footer() {
    include includes_path('footer.php');
}

// Sanitize email specifically
function sanitizeEmail($email) {
    return filter_var($email, FILTER_SANITIZE_EMAIL);
}

// Validate email
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Generate secure random string
function generateSecureToken($length = 32) {
    return bin2hex(random_bytes($length));
}

// CSRF token generation
function generateCSRFToken() {
    if (empty($_SESSION['csrf_token']) || empty($_SESSION['csrf_token_time']) || (time() - $_SESSION['csrf_token_time']) > 3600) {
        $_SESSION['csrf_token'] = generateSecureToken(32);
        $_SESSION['csrf_token_time'] = time();
    }
    return $_SESSION['csrf_token'];
}

// CSRF token validation
function validateCSRFToken($token) {
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}


// Secure redirect with validation
function redirect($url) {
    // Validate URL to prevent open redirect
    $parsedUrl = parse_url($url);
    if ($parsedUrl === false || !isset($parsedUrl['host'])) {
        // Relative URL - safe to redirect
        header("Location: " . $url);
    } else {
        // Absolute URL - check if it's our domain
        $allowedHosts = ['localhost', '127.0.0.1'];
        $currentHost = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '';

        if (in_array($parsedUrl['host'], $allowedHosts) || strpos($currentHost, $parsedUrl['host']) !== false) {
            header("Location: " . $url);
        } else {
            // Log potential security issue
            error_log("Blocked potential open redirect attempt to: " . $url);
            header("Location: /");
        }
    }
    exit();
}

// Rate limiting helper
function checkRateLimit($action, $maxAttempts = 5, $timeWindow = 300) {
    $key = 'rate_limit_' . $action . '_' . $_SERVER['REMOTE_ADDR'];
    $attempts = isset($_SESSION[$key]) ? $_SESSION[$key] : 0;
    $lastAttempt = isset($_SESSION[$key . '_time']) ? $_SESSION[$key . '_time'] : 0;

    $currentTime = time();

    // Reset if time window has passed
    if ($currentTime - $lastAttempt > $timeWindow) {
        $attempts = 0;
    }

    if ($attempts >= $maxAttempts) {
        return false; // Rate limit exceeded
    }

    $_SESSION[$key] = $attempts + 1;
    $_SESSION[$key . '_time'] = $currentTime;

    return true;
}

// Enhanced date formatting with validation
function formatDate($date, $format = 'F j, Y') {
    $timestamp = strtotime($date);
    return $timestamp ? date($format, $timestamp) : '';
}

// Improved slug generation
function generateSlug($string) {
    $slug = strtolower(trim($string));
    $slug = preg_replace('/[^a-z0-9-]/', '-', $slug);
    $slug = preg_replace('/-+/', '-', $slug);
    return trim($slug, '-');
}


// Validate file upload using server-side MIME detection
function validateFileUpload($file, $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'], $maxSize = 2097152) {
    if (!isset($file['error']) || $file['error'] !== UPLOAD_ERR_OK) {
        return false;
    }

    if ($file['size'] > $maxSize) {
        return false;
    }

    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $detectedMime = $finfo->file($file['tmp_name']);

    if (!in_array($detectedMime, $allowedTypes, true)) {
        return false;
    }

    $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
    if (!in_array($extension, $allowedExtensions)) {
        return false;
    }

    return true;
}
?>
