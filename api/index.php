<?php

// 1. Enable error reporting for debugging on Vercel
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 2. Workaround for read-only filesystem
putenv('ILLUMINATE_STORAGE_PATH=/tmp');

// Ensure storage subdirectories exist in /tmp
$storagePaths = [
    '/tmp/framework/views',
    '/tmp/framework/cache',
    '/tmp/framework/sessions',
    '/tmp/logs',
];

foreach ($storagePaths as $path) {
    if (!is_dir($path)) {
        mkdir($path, 0755, true);
    }
}

// 3. Verify autoloader exists
$autoloader = __DIR__ . '/../vendor/autoload.php';
if (!file_exists($autoloader)) {
    die("Error: Composer autoloader not found at $autoloader. Please check build logs.");
}

// 4. Forward to Laravel
require __DIR__ . '/../public/index.php';
