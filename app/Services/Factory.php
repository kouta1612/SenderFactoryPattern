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

    protected abstract function createProduct(string $owner);
    protected abstract function registerProduct($product);
}
