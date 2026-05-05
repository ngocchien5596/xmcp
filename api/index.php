<?php

// 1. Force display errors for deep debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 2. Clear bootstrap cache (Crucial for Vercel/Serverless)
// These files can contain hardcoded paths from the build environment
$cacheFiles = [
    __DIR__ . '/../bootstrap/cache/config.php',
    __DIR__ . '/../bootstrap/cache/services.php',
    __DIR__ . '/../bootstrap/cache/packages.php',
    __DIR__ . '/../bootstrap/cache/routes-v7.php',
];

foreach ($cacheFiles as $file) {
    if (file_exists($file)) {
        unlink($file);
    }
}

// 3. Workaround for read-only filesystem
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

// 4. Try to boot Laravel and catch the REAL error
try {
    require __DIR__ . '/../public/index.php';
} catch (\Throwable $e) {
    echo "<h1>REAL BOOT ERROR DETECTED</h1>";
    echo "<b>Type:</b> " . get_class($e) . "<br>";
    echo "<b>Message:</b> " . $e->getMessage() . "<br>";
    echo "<b>File:</b> " . $e->getFile() . "<br>";
    echo "<b>Line:</b> " . $e->getLine() . "<br>";
    echo "<h2>Stack Trace:</h2>";
    echo "<pre>" . $e->getTraceAsString() . "</pre>";
    exit(1);
}
