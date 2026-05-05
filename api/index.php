<?php

// 1. Production Error Reporting (Set to 1 temporarily to see the crash if it happens)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

try {
    // 2. Prepare writable directories
    $storageDirs = ['/tmp/framework/views', '/tmp/framework/cache', '/tmp/framework/sessions', '/tmp/bootstrap/cache', '/tmp/logs'];
    foreach ($storageDirs as $dir) {
        if (!is_dir($dir)) @mkdir($dir, 0755, true);
    }

    // 3. Set Environment
    $protocol = 'https'; // Force https for Vercel
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

    // 4. Load Laravel
    require __DIR__ . '/../vendor/autoload.php';
    $app = require_once __DIR__ . '/../bootstrap/app.php';

    // 5. Force Writable Paths
    $app->useBootstrapPath('/tmp/bootstrap');
    $app->useStoragePath('/tmp');

    // 6. Force Config and HTTPS safely
    $app->booting(function ($app) use ($appUrl) {
        $app['config']->set('view.compiled', '/tmp/framework/views');
        $app['config']->set('app.url', $appUrl);
        $app['config']->set('app.asset_url', $appUrl);
        
        if (class_exists(\Illuminate\Support\Facades\URL::class)) {
            \Illuminate\Support\Facades\URL::forceScheme('https');
        }
    });

    // 7. Handle Request
    $kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
    $request = Illuminate\Http\Request::capture();
    $response = $kernel->handle($request);
    $response->send();
    $kernel->terminate($request, $response);

} catch (\Throwable $e) {
    echo "<h1>Critical Error</h1>";
    echo "<b>Message:</b> " . $e->getMessage() . "<br>";
    echo "<b>File:</b> " . $e->getFile() . "<br>";
    echo "<pre>" . $e->getTraceAsString() . "</pre>";
}
