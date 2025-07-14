<?php
namespace Core;

use PDO;
use PDOException;

class Database {
    private static $conn;

    public static function connect(array $config) {
        if (!self::$conn) {
            try {
                $dsn = "{$config['driver']}:host={$config['host']};dbname={$config['database']};charset={$config['charset']}";
                self::$conn = new PDO($dsn, $config['username'], $config['password']);
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                die("Database connection failed: " . $e->getMessage());
            }
        }
        return self::$conn;
    }

    public static function getConnection() {
        return self::$conn;
    }

    public static function query(string $sql, array $params = []) {
        $stmt = self::$conn->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }
}
