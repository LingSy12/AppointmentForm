<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * Router script for PHP's built-in web server, emulating Apache's mod_rewrite.
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// Serve real files (CSS, JS, images) directly from the public directory.
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

require_once __DIR__.'/public/index.php';
