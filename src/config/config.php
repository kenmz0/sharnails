<?php
// src/config/config.php

// Configuración de Seguridad
$isLocal = ($_SERVER['REMOTE_ADDR'] == '127.0.0.1' || $_SERVER['REMOTE_ADDR'] == '::1');
ini_set('session.cookie_httponly', 1);
if (!$isLocal) {
    ini_set('session.cookie_secure', 1);
}

// Rutas Globales
define('BASE_DIR', dirname(__DIR__, 2) . '/'); // Subimos dos niveles para salir de config y src
define('SRC_PATH', BASE_DIR . 'src/');
define('VIEWS_PATH', SRC_PATH . 'views/');
?>