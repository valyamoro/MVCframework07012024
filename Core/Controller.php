<?php

namespace app\Core;

use app\Database\PDOConnection;

class Controller
{
    public PDOConnection $PDOConnection;
    public function __construct()
    {
        $this->PDOConnection = new PDOConnection(include __DIR__ . '/../config/db.php');
    }

    public function index(): string
    {
        return \substr(\get_class($this), 15) . ' index';
    }

}
