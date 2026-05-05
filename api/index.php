<?php

// 1. Force display errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

try {
    // 2. Prepare writable directories in /tmp
    $storageDirs = [
        '/tmp/framework/views',
        '/tmp/framework/cache',
        '/tmp/framework/sessions',
        '/tmp/bootstrap/cache',
        '/tmp/logs'
    ];
    foreach ($storageDirs as $dir) {
        if (!is_dir($dir)) mkdir($dir, 0755, true);
    }

    // 3. Set basic environment variables
    putenv('APP_ENV=production');
    putenv('APP_DEBUG=true');
    putenv('SESSION_DRIVER=cookie');
    putenv('CACHE_STORE=array');
    putenv('DB_CONNECTION=sqlite');
    putenv('DB_DATABASE=:memory:');
    putenv('ILLUMINATE_STORAGE_PATH=/tmp');

    // 4. Load Laravel
    require __DIR__ . '/../vendor/autoload.php';
    $app = require_once __DIR__ . '/../bootstrap/app.php';

    // 5. REDIRECT EVERYTHING TO /TMP
    $app->useBootstrapPath('/tmp/bootstrap');
    $app->useStoragePath('/tmp');

    // 6. FORCE OVERRIDE CONFIG (Brute force approach)
    // We bind a custom config loader or just set it immediately
    $app->booting(function ($app) {
        $app['config']->set('view.compiled', '/tmp/framework/views');
        $app['config']->set('cache.stores.file.path', '/tmp/framework/cache');
        $app['config']->set('session.files', '/tmp/framework/sessions');
    });

    // 7. Handle Request
    $kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
    $request = Illuminate\Http\Request::capture();
    $response = $kernel->handle($request);
    $response->send();
    $kernel->terminate($request, $response);

} catch (\Throwable $e) {
    echo "<h2 style='color:red'>DEPLOYMENT ERROR</h2>";
    echo "<b>Message:</b> " . $e->getMessage() . "<br>";
    echo "<b>File:</b> " . $e->getFile() . "<br>";
    echo "<b>Line:</b> " . $e->getLine() . "<br>";
    echo "<pre>" . $e->getTraceAsString() . "</pre>";
}
