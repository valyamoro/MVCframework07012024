<?php

namespace app\Core;

class View
{
    public static function render(string $view, array $params): string
    {
        \extract($params);
        \ob_start();
        include __DIR__ . "/../Views/auth/{$view}.php";
        return \ob_get_clean();
    }

}