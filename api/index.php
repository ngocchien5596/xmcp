<?php

// 1. Force display errors for final debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

try {
    // 2. Setup Writable Storage and Cache paths for Vercel
    $vPath = '/tmp/bootstrap/cache';
    if (!is_dir($vPath)) {
        mkdir($vPath, 0755, true);
    }

    // 3. Set Environment Variables
    putenv('APP_ENV=production');
    putenv('APP_DEBUG=true');
    putenv('LOG_CHANNEL=stderr');
    putenv('SESSION_DRIVER=cookie');
    putenv('CACHE_STORE=array');
    putenv('DB_CONNECTION=sqlite');
    putenv('DB_DATABASE=:memory:');
    putenv('ILLUMINATE_STORAGE_PATH=/tmp');

    // 4. Load Autoloader
    require __DIR__ . '/../vendor/autoload.php';

    // 5. Initialize Application
    $app = require_once __DIR__ . '/../bootstrap/app.php';

    // 6. IMPORTANT: Tell Laravel to use /tmp for its bootstrap cache (packages, services, config)
    // This bypasses the read-only filesystem error
    $app->useBootstrapPath('/tmp/bootstrap');

    // 7. Boot and Handle Request
    $kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
    $request = Illuminate\Http\Request::capture();
    $response = $kernel->handle($request);
    $response->send();
    $kernel->terminate($request, $response);

} catch (\Throwable $e) {
    echo "<h2 style='color:red'>FINAL DEBUG ERROR</h2>";
    echo "<b>Message:</b> " . $e->getMessage() . "<br>";
    echo "<b>File:</b> " . $e->getFile() . "<br>";
    echo "<b>Line:</b> " . $e->getLine() . "<br>";
    echo "<pre>" . $e->getTraceAsString() . "</pre>";
}
