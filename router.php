<?php
/**
 * Local development router for PHP's built-in server.
 *
 * Reproduces the extensionless URL rewriting defined in .htaccess so that
 * links such as /about and /fishafrica work locally:
 *
 *   /about      -> about.php
 *   /fishafrica -> fishafrica.php
 *   /           -> index.php
 *
 * Usage:
 *   php -S localhost:8000 router.php
 *
 * Not used in production: Apache applies .htaccess there.
 */

$path = rawurldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?: '/');
$file = __DIR__ . $path;

// Let the built-in server handle real files (CSS, JS, images, .php, etc.).
if ($path !== '/' && is_file($file)) {
    return false;
}

// Map extensionless URLs to their .php file.
if ($path !== '/' && is_file($file . '.php')) {
    require $file . '.php';
    return true;
}

// Site root and directory indexes.
if ($path === '/') {
    require __DIR__ . '/index.php';
    return true;
}

$index = rtrim($file, '/') . '/index.php';
if (is_dir($file) && is_file($index)) {
    require $index;
    return true;
}

http_response_code(404);
echo '404 Not Found';
