<?php

namespace app\Models;

use app\Core\Model;

class Product extends Model
{
    public const TABLE_NAME = 'products';

    public function getAll()
    {
        $query = 'SELECT * FROM ' . static::TABLE_NAME;

        $sth = $this->connectionDB()->prepare($query);
        $sth->execute();

        return $sth->fetchAll();
    }

}
