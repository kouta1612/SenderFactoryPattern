<?php

namespace App\Services;

class Account
{
    private $owner;

    public function __construct($owner)
    {
        echo "Create Account: {$owner}<br>";
        $this->owner = $owner;
    }

    public function use()
    {
        echo "Use Account: {$this->owner}<br>";
    }

    public function getOwner()
    {
        return $this->owner;
    }
}
