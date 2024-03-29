<?php
declare(strict_types=1);
error_reporting(-1);
session_start();

use app\Core\Routes\Router;

include_once __DIR__ . '/vendor/autoload.php';

$router = new Router();
$router->dispatch($router->getUri());
