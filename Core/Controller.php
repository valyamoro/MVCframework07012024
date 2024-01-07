<?php

namespace app\Core;

use app\Database\PDOConnection;
use PHPUnit\TextUI\Application;

class Controller
{
    public static PDOConnection $PDOConnection;
    public function __construct()
    {
        self::$PDOConnection = new PDOConnection(include __DIR__ . '/../config/db.php');
    }

    public function index(): string
    {
        return \substr(\get_class($this), 15) . ' index';
    }

    public static function render($view, $method, $params = []): string
    {
        if ($_POST) {
            static::$method($_POST);
        }

        return View::render($view, $params);
    }

}
