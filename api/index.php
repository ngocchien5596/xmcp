<?php

// 1. Force display errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 2. Force production-safe environment variables for Vercel
putenv('APP_ENV=production');
putenv('APP_DEBUG=true');
putenv('LOG_CHANNEL=stderr');
putenv('SESSION_DRIVER=cookie');
putenv('CACHE_STORE=array');
putenv('DB_CONNECTION=sqlite');
putenv('DB_DATABASE=:memory:'); // Use in-memory DB to avoid file access issues
putenv('ILLUMINATE_STORAGE_PATH=/tmp');

// 3. Clear bootstrap cache
$cacheFiles = [
    __DIR__ . '/../bootstrap/cache/config.php',
    __DIR__ . '/../bootstrap/cache/services.php',
    __DIR__ . '/../bootstrap/cache/packages.php',
];
foreach ($cacheFiles as $file) {
    if (file_exists($file)) @unlink($file);
}

// 4. Ensure storage subdirectories
$storagePaths = ['/tmp/framework/views', '/tmp/framework/cache', '/tmp/framework/sessions', '/tmp/logs'];
foreach ($storagePaths as $path) {
    if (!is_dir($path)) @mkdir($path, 0755, true);
}

// 5. Boot Laravel
try {
    require __DIR__ . '/../public/index.php';
} catch (\Throwable $e) {
    echo "<h1>CRITICAL BOOT ERROR</h1>";
    echo "<b>Message:</b> " . $e->getMessage() . "<br>";
    echo "<b>File:</b> " . $e->getFile() . "<br>";
    echo "<b>Line:</b> " . $e->getLine() . "<br>";
    echo "<pre>" . $e->getTraceAsString() . "</pre>";
}
