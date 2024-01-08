<?php

namespace app\Core;
use app\Database\PDOConnection;

abstract class Model
{
    public function __construct(
        private readonly PDOConnection $PDOConnection
    ) {}

    public function connectionDB(): \PDO
    {
        return $this->PDOConnection->connection();
    }

}
