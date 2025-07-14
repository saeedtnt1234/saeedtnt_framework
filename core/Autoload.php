<?php

namespace Core;

class Autoload
{
    protected static $prefixes = [
        'App\\' => __DIR__ . '/../app/',
        'Core\\' => __DIR__ . '/',
    ];

    public static function register()
    {
        spl_autoload_register([__CLASS__, 'loadClass']);
    }

    public static function loadClass($class)
    {
        foreach (self::$prefixes as $prefix => $baseDir) {
            // آیا namespace با این prefix شروع می‌شود؟
            $len = strlen($prefix);
            if (strncmp($prefix, $class, $len) !== 0) {
                continue;
            }

            // مسیر نسبی کلاس
            $relativeClass = substr($class, $len);

            // جایگزینی \ با /
            $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';

            if (file_exists($file)) {
                require $file;
                return true;
            }
        }

        return false;
    }
}
