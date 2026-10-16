<?php
if (session_status() === PHP_SESSION_NONE) {
    ini_set('session.use_only_cookies', 1);
    ini_set('session.use_strict_mode', 1);
    ini_set('session.cookie_httponly', 1);
    ini_set('session.cookie_samesite', 'Strict');
    ini_set('session.gc_maxlifetime', 86400);
    session_name('FMLDS_SESSID');
    session_start();
}

define('SITE_NAME', 'FMLDS');
define('ROOT_DIR', realpath(__DIR__ . '/..') ?: (__DIR__ . '/..'));
define('INCLUDES_DIR', ROOT_DIR . '/includes');
define('PAGES_DIR', ROOT_DIR . '/pages');
define('ASSETS_DIR', ROOT_DIR . '/assets');
define('UPLOADS_DIR', ROOT_DIR . '/uploads');
define('LOGS_DIR', ROOT_DIR . '/logs');

$errorLogDir = LOGS_DIR;
if (!is_dir($errorLogDir)) {
    @mkdir($errorLogDir, 0700, true);
}
ini_set('error_log', $errorLogDir . '/php_errors.log');

date_default_timezone_set('UTC');

$isLocalhost = isset($_SERVER['HTTP_HOST']) && in_array(strtolower((string) $_SERVER['HTTP_HOST']), ['localhost', '127.0.0.1', '::1'], true);
error_reporting(E_ALL);
ini_set('display_errors', $isLocalhost ? '1' : '0');

require_once ROOT_DIR . '/includes/functions.php';