<?php

namespace app\Database;

class PDOConnection
{
    public function __construct(private readonly array $configuration)
    {

    }

    public function connection(): \PDO
    {
        return new \PDO(
            $this->getDSN(),
            $this->configuration['username'],
            $this->configuration['password'],
            $this->configuration['options'],
        );
    }

    private function getDSN(): string
    {
        return \sprintf(
            '%s:host=localhost;dbname=%s;charset=%s',
            $this->configuration['port'],
            $this->configuration['dbname'],
            $this->configuration['charset'],
        );
    }
}