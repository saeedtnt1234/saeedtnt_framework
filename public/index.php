<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../core/helpers.php';
require_once '../vendor/autoload.php';
require_once __DIR__ . '/../core/Autoload.php';
require_once __DIR__ . '/../core/helpers.php';

\Core\Autoload::register();

\Core\Security::startSession();


// اتصال به دیتابیس
$config = require_once __DIR__ . '/../config/database.php';
\Core\Database::connect($config);

// روت‌ها
require_once __DIR__ . '/../app/Routes/web.php';

\Core\Router::dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
