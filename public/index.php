<?php
// public/index.php
// 1. Activar errores para ver qué pasa
ini_set('display_errors', 1);
error_reporting(E_ALL);

echo "<h1>🔍 DIAGNÓSTICO DE CARPETAS EN RAILWAY</h1>";
echo "<strong>Ruta actual (__DIR__):</strong> " . __DIR__ . "<br><br>";

// Listar los archivos en la raíz /app
echo "<strong>Archivos en la raíz (/app):</strong><br>";
if (is_dir('/app')) {
    echo "<pre>" . print_r(scandir('/app'), true) . "</pre>";
}

// Intentar listar los archivos dentro de /app/src si es que existe
echo "<strong>Archivos en /app/src (si existe):</strong><br>";
if (is_dir('/app/src')) {
    echo "<pre>" . print_r(scandir('/app/src'), true) . "</pre>";
} else {
    echo "❌ La carpeta /app/src NO EXISTE en el servidor.<br>";
}

die("<br>--- FIN DEL DIAGNÓSTICO ---");

// 2. DETECTOR DE ENTORNO DINÁMICO PARA RUTAS
// Intentamos la ruta estándar (subiendo un nivel desde public)
$config_path = __DIR__ . '/../src/config/config.php';

// Si no existe ahí (caso de Railway ejecutando desde /app), probamos la ruta directa
if (!file_exists($config_path)) {
    $config_path = __DIR__ . '/src/config/config.php';
}

require_once $config_path;


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