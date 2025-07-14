<?php

namespace Core;

class View
{
    public static function make($viewName, $data = [])
    {
        $viewPath = __DIR__ . '/../app/Views/' . $viewName . '.saeedtnt.php';

        if (file_exists($viewPath)) {
            extract($data);
            require $viewPath;
        } else {
            echo "View $viewName not found.";
        }
    }
}
