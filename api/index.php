<?php

// HEALTH CHECK: Uncomment the line below to test if PHP is executing at all
// die('PHP IS ALIVE AND WORKING');

// Workaround for read-only filesystem
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

// Forward to Laravel
require __DIR__ . '/../public/index.php';
