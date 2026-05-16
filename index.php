<?php
// public/index.php
// 1. Activar errores para ver qué pasa
ini_set('display_errors', 1);
error_reporting(E_ALL);



require_once 'src/config/config.php';


//Event Listener Not Source Found
spl_autoload_register(function ($class_name) {
    $directories = [
        BASE_DIR . 'src/routes/',
        BASE_DIR . 'src/controllers/',
        BASE_DIR . 'src/middleware/',
    ];

    foreach ($directories as $directory) {
        $file = $directory . $class_name . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});

require_once BASE_DIR . 'src/core/router.php';
$router = new Router();
require_once BASE_DIR . 'src/routes/routes.config.php';
// Despachar la ruta actual
$router->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);

exit;
?>