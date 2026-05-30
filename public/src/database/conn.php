<?php
require_once SRC_PATH . 'env/env.php';

$host = getenv('DB_HOST');
$db = getenv('DB_NAME');
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');
try {
    // 1. Definimos el puerto por defecto de Postgres (5432)
    $port = "5432"; 
    
    // 2. Cambiamos "mysql" por "pgsql" y ajustamos la estructura
    $dsn = "pgsql:host=$host;port=$port;dbname=$db";
    
    // 3. Creamos la conexión PDO
    $conn_pdo = new PDO($dsn, $user, $pass);
    
    // 4. Atributos de seguridad y errores
    $conn_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn_pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    // (Opcional) Para asegurarte de que UTF-8 esté activo en Postgres
    $conn_pdo->exec("SET names 'utf8'");

    error_log("¡Conexión exitosa a PostgreSQL!");

} catch (PDOException $e) {
    // Mientras estás desarrollando, cambia el die por este para ver el error real si falla
    die("Error de conexión a Postgres: " . $e->getMessage());
    
    // Cuando lo vayas a subir a producción, vuelves a usar tu código seguro:
    // error_log($e->getMessage());
    // die("Error interno del servidor.");
}
?>