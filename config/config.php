<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

define('SITE_NAME', 'FMLDS');

$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$scriptName = $_SERVER['SCRIPT_NAME'] ?? '';
$basePath = '';

if (PHP_SAPI !== 'cli' && $scriptName !== '') {
    $scriptDir = str_replace('\\', '/', dirname($scriptName));
    if (substr($scriptDir, -6) === '/pages') {
        $scriptDir = dirname($scriptDir);
    }
    $basePath = rtrim($scriptDir, '/');
    $basePath = ($basePath === '.' || $basePath === '/') ? '' : $basePath;
}

define('SITE_URL', $scheme . '://' . $host . $basePath);

date_default_timezone_set('UTC');

$isLocalhost = isset($_SERVER['HTTP_HOST']) && in_array($_SERVER['HTTP_HOST'], ['localhost', '127.0.0.1'], true);
error_reporting(E_ALL);
ini_set('display_errors', $isLocalhost ? '1' : '0');

require_once dirname(__DIR__) . '/includes/functions.php';
?>
