<?php 
class Database
{
    private static ?PDO $connection = null;

    public static function getConnection(): PDO
    {
        if (self::$connection === null) {
            require_once __DIR__ . '/conn.php';
            self::$connection = $conn_pdo;
        }
        return self::$connection;
    }
}
?>