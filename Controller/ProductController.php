<?php

namespace app\Controller;

use app\Core\Controller;
use app\Models\Product;

class ProductController extends Controller
{
    public function index(): string
    {
        $product = new Product($this->PDOConnection);
        print_r($product->getAll());
    }

}
