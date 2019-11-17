<?php

namespace App\Services\Company;

class SenderFactory
{
    private $classMap;

    public function __construct()
    {
        $this->classMap = [
            'Ninja' => Globalpower::class,
            'Workgate' => Workgate::class
        ];
    }

    // GlobalpowerまたはWorkgateを作成
    public static function create(string $class)
    {
        $class = Arr::get((new static)->classMap, $class);
        return new $class();
    }
}
