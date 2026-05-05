<?php

// 1. Force display errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<h1>Laravel Deep Bootstrap Debug</h1>";

try {
    // 2. Setup Environment
    putenv('APP_ENV=production');
    putenv('APP_DEBUG=true');
    putenv('LOG_CHANNEL=stderr');
    putenv('SESSION_DRIVER=cookie');
    putenv('CACHE_STORE=array');
    putenv('DB_CONNECTION=sqlite');
    putenv('DB_DATABASE=:memory:');
    putenv('ILLUMINATE_STORAGE_PATH=/tmp');

    require __DIR__ . '/../vendor/autoload.php';
    $app = require_once __DIR__ . '/../bootstrap/app.php';

    // 3. Manually trigger Bootstrappers to see where it fails
    echo "Accessing Kernel...<br>";
    $kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

    echo "Manually Bootstrapping...<br>";
    // This is the core of the issue. We manually call the bootstrappers.
    $bootstrappers = [
        \Illuminate\Foundation\Bootstrap\LoadEnvironmentVariables::class,
        \Illuminate\Foundation\Bootstrap\LoadConfiguration::class,
        \Illuminate\Foundation\Bootstrap\HandleExceptions::class,
        \Illuminate\Foundation\Bootstrap\RegisterFacades::class,
        \Illuminate\Foundation\Bootstrap\RegisterProviders::class,
        \Illuminate\Foundation\Bootstrap\BootProviders::class,
    ];

    foreach ($bootstrappers as $bootstrapper) {
        echo "Running: $bootstrapper... ";
        $app->make($bootstrapper)->bootstrap($app);
        echo "<span style='color:green'>DONE</span><br>";
    }

    echo "All Bootstrappers finished! Now trying to handle request...<br>";
    $request = Illuminate\Http\Request::capture();
    $response = $kernel->handle($request);
    $response->send();

} catch (\Throwable $e) {
    echo "<h2 style='color:red'>REAL ROOT CAUSE DETECTED!</h2>";
    echo "<b>Class:</b> " . get_class($e) . "<br>";
    echo "<b>Message:</b> " . $e->getMessage() . "<br>";
    echo "<b>File:</b> " . $e->getFile() . "<br>";
    echo "<b>Line:</b> " . $e->getLine() . "<br>";
    echo "<h3>Stack Trace:</h3>";
    echo "<pre>" . $e->getTraceAsString() . "</pre>";
}
