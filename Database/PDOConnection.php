<?php

namespace Database;

use goodFM\Database\PDO;

class PDOConnection
{
    public function connection(): \PDO
    {
        return new \PDO(
            'mysql:host=localhost;dbname=db-tt;charset=utf8mb4',
            'root',
            '',
        );
    }
}