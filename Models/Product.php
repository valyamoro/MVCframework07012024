<?php

namespace app\Models;

use app\Core\Model;

abstract class Product extends Model
{
    public const TABLE_NAME = 'products';

    public function __construct(
        private readonly string $id,
        private readonly string $title,
        private readonly string $description,
        private readonly string $price,
        private readonly string $quantity,
    )
    {}

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getPrice(): string
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getQuantity(): string
    {
        return $this->quantity;
    }

    public function getAll()
    {
        $query = 'SELECT * FROM ' . static::TABLE_NAME;

        $sth = $this->connectionDB()->prepare($query);
        $sth->execute();

        return $sth->fetchAll();
    }

}
