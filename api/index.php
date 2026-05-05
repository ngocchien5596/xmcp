<?php

// 1. Force display errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "PHP Version: " . PHP_VERSION . "<br>";

try {
    // 2. Workaround for read-only filesystem
    putenv('ILLUMINATE_STORAGE_PATH=/tmp');

    // Ensure storage subdirectories
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

    // 3. Verify files
    $autoloader = __DIR__ . '/../vendor/autoload.php';
    if (!file_exists($autoloader)) {
        die("Fatal Error: vendor/autoload.php not found. Current DIR: " . __DIR__);
    }

    $appPath = __DIR__ . '/../bootstrap/app.php';
    if (!file_exists($appPath)) {
        die("Fatal Error: bootstrap/app.php not found.");
    }

    // 4. Try to boot Laravel
    require __DIR__ . '/../public/index.php';

} catch (\Throwable $e) {
    echo "<h1>Laravel Boot Error</h1>";
    echo "<b>Message:</b> " . $e->getMessage() . "<br>";
    echo "<b>File:</b> " . $e->getFile() . "<br>";
    echo "<b>Line:</b> " . $e->getLine() . "<br>";
    echo "<h2>Stack Trace:</h2>";
    echo "<pre>" . $e->getTraceAsString() . "</pre>";
}
