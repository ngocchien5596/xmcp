<?php

// 1. Force display errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<h1>Bypassing public/index.php for Deep Debugging</h1>";

try {
    // 2. Setup Environment
    putenv('APP_ENV=production');
    putenv('APP_DEBUG=true');
    putenv('DB_CONNECTION=sqlite');
    putenv('DB_DATABASE=:memory:');
    putenv('SESSION_DRIVER=cookie');
    putenv('CACHE_STORE=array');
    putenv('ILLUMINATE_STORAGE_PATH=/tmp');

    // 3. Manual Bootstrap
    echo "Loading Autoloader...<br>";
    require __DIR__ . '/../vendor/autoload.php';

    echo "Loading Application...<br>";
    $app = require_once __DIR__ . '/../bootstrap/app.php';

    echo "Booting Kernel...<br>";
    $kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

    echo "Handling Request...<br>";
    // We capture the request but we don't use the standard handleRequest
    // to avoid the built-in exception handler that hides the real error
    $request = Illuminate\Http\Request::capture();
    
    // This is where it usually fails
    $response = $kernel->handle($request);
    
    $response->send();
    $kernel->terminate($request, $response);

} catch (\Throwable $e) {
    echo "<h2 style='color:red'>ORIGINAL ERROR CAUGHT!</h2>";
    echo "<b>Class:</b> " . get_class($e) . "<br>";
    echo "<b>Message:</b> " . $e->getMessage() . "<br>";
    echo "<b>File:</b> " . $e->getFile() . "<br>";
    echo "<b>Line:</b> " . $e->getLine() . "<br>";
    echo "<h3>Stack Trace:</h3>";
    echo "<pre>" . $e->getTraceAsString() . "</pre>";
}
