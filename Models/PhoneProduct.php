<?php

namespace app\Models;

class PhoneProduct extends Product
{
    public function __construct(
        string $id,
        string $title,
        string $description,
        string $quantity,
        string $price,
        private string $producer,
    )
    {
        parent::__construct($id, $title, $description, $price, $quantity);
    }

    /**
     * @return string
     */
    public function getProducer(): string
    {
        return $this->producer;
    }
}