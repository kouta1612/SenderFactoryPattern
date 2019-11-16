<?php

namespace App\Services;

abstract class Factory
{
    public function create(string $owner)
    {
        $product = $this->createProduct($owner);
        $this->registerProduct($product);
        return $product;
    }

    abstract protected function createProduct(string $owner);
    abstract protected function registerProduct($product);
}
