<?php

// 1. Production Error Reporting
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(0);

try {
    // 2. Prepare writable directories
    $storageDirs = ['/tmp/framework/views', '/tmp/framework/cache', '/tmp/framework/sessions', '/tmp/bootstrap/cache', '/tmp/logs'];
    foreach ($storageDirs as $dir) {
        if (!is_dir($dir)) @mkdir($dir, 0755, true);
    }

    // 3. Set Environment
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
    $appUrl = $protocol . '://' . $host;

    putenv("APP_URL=$appUrl");
    putenv('APP_ENV=production');
    putenv('APP_DEBUG=false');
    putenv('LOG_CHANNEL=stderr');
    putenv('SESSION_DRIVER=cookie');
    putenv('CACHE_STORE=array');
    putenv('DB_CONNECTION=sqlite');
    putenv('DB_DATABASE=:memory:');
    putenv('ILLUMINATE_STORAGE_PATH=/tmp');

    // 4. Bootstrap Laravel
    require __DIR__ . '/../vendor/autoload.php';
    $app = require_once __DIR__ . '/../bootstrap/app.php';

    // 5. Force Writable Paths and HTTPS
    $app->useBootstrapPath('/tmp/bootstrap');
    $app->useStoragePath('/tmp');
    
    // Force HTTPS for all generated URLs
    URL::forceScheme('https');

    // 6. Force Config
    $app->booting(function ($app) use ($appUrl) {
        $app['config']->set('view.compiled', '/tmp/framework/views');
        $app['config']->set('app.url', $appUrl);
        $app['config']->set('app.asset_url', $appUrl);
    });

    // 7. Handle Request
    $kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
    $request = Illuminate\Http\Request::capture();
    $response = $kernel->handle($request);
    $response->send();
    $kernel->terminate($request, $response);

} catch (\Throwable $e) {
    http_response_code(500);
    echo "Internal Server Error";
}
