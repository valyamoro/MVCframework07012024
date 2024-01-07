<?php

use app\Models\PhoneProduct;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function testCreatePhoneProduct(): void
    {
        $data = [
            'id' => '1',
            'title' => 'Phone number one',
            'description' => 'phone description',
            'price' => '350',
            'quantity' => '30',
            'producer' => 'someName',
        ];

        $product = new PhoneProduct(
            $data['id'],
            $data['title'],
            $data['description'],
            $data['quantity'],
            $data['price'],
            $data['producer'],
        );

        $this->assertSame('1', $product->getId());
        $this->assertSame('Phone number one', $product->getTitle());
        $this->assertSame('phone description', $product->getDescription());
        $this->assertSame('30', $product->getQuantity());
        $this->assertSame('350', $product->getPrice());
        $this->assertSame('someName', $product->getProducer());

    }

}
