<?php

use Core\Database;

require_once __DIR__ . '/../core/Autoload.php';
\Core\Autoload::register();
$config = require __DIR__ . '/../config/database.php';
Database::connect($config);
$conn = Database::getConnection();

$conn->exec("
    CREATE TABLE IF NOT EXISTS Users (
        `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` TEXT NULL,
    `email` TEXT NULL,
    `password` VARCHAR(3000) NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );
");

echo "✅ مایگریشن 'Users' اجرا شد.
";
