<?php

// Set storage path to /tmp for Vercel (read-only filesystem workaround)
// This is critical for Laravel's compiled views, cache, and sessions
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

// Forward to the real index.php
require __DIR__ . '/../public/index.php';
