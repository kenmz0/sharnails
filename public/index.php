<?php
// public/index.php
require_once '../src/config/config.php';
session_start();


//Event Listener Not Source Found
spl_autoload_register(function ($class_name) {
    $directories = [
        '../src/routes/',
        '../src/controllers/',
        '../src/middleware/',
    ];

    foreach ($directories as $directory) {
        $file = $directory . $class_name . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});

require_once '../src/core/router.php';
$router = new Router();
require_once '../src/routes/routes.config.php';
// Despachar la ruta actual
$router->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);

exit;
?>