<?php

// 1. Force display errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

try {
    // 2. Setup Writable Paths
    $tmpPath = '/tmp/framework/views';
    if (!is_dir($tmpPath)) {
        mkdir($tmpPath, 0755, true);
    }

    // 3. Set Environment
    putenv('APP_ENV=production');
    putenv('APP_DEBUG=true');
    putenv('LOG_CHANNEL=stderr');
    putenv('SESSION_DRIVER=cookie');
    putenv('CACHE_STORE=array');
    putenv('DB_CONNECTION=sqlite');
    putenv('DB_DATABASE=:memory:');
    putenv('ILLUMINATE_STORAGE_PATH=/tmp');

    // 4. Bootstrap Laravel
    require __DIR__ . '/../vendor/autoload.php';
    $app = require_once __DIR__ . '/../bootstrap/app.php';
    
    // 5. Redirect Bootstrap Cache
    $app->useBootstrapPath('/tmp/bootstrap');
    if (!is_dir('/tmp/bootstrap/cache')) {
        mkdir('/tmp/bootstrap/cache', 0755, true);
    }

    // 6. OVERRIDE CONFIG: Force compiled views path
    // This is the fix for "Please provide a valid cache path"
    $app->afterResolving('config', function ($config) use ($tmpPath) {
        $config->set('view.compiled', $tmpPath);
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
