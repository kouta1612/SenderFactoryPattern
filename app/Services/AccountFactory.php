<?php

namespace App\Services;

class AccountFactory extends Factory
{
    private $owners = [];

    protected function createProduct(string $owner)
    {
        return new Account($owner);
    }

    protected function registerProduct($product)
    {
        $this->owners[] = $product->getOwner();
    }

    public function getOwners()
    {
        return $this->owners;
    }
}
