<?php

namespace App\Services;

use Exception;
use Illuminate\Support\Arr;

class PaymentFactory
{
    public static function create()
    {
        $classMap = [
            config('pay_way.collect_on_delivery') => 'PaidOnDelivery',
            config('pay_way.credit_card') => 'CreditCard',
            config('pay_way.bill') => 'Bill'
        ];

        $class = sprintf('App\Services\%s', Arr::get($classMap, request()->get('pay_way')));
        if (!class_exists($class)) {
            throw new Exception('invalid payway');
        }

        return new $class();
    }
}
