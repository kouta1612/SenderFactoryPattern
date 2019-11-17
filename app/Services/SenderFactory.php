<?php

namespace App\Services;

use App\User;
use App\Company;
use App\Services\User\Sender as UserSender;
use App\Services\Company\Sender as CompanySender;
use Illuminate\Support\Arr;

class SenderFactory
{
    private $classMap;

    public function __construct()
    {
        $this->classMap = [
            User::class => UserSender::class,
            Company::class => CompanySender::class,
        ];
    }

    // UserSenderまたはCompanySenderを作成
    public static function create(string $class)
    {
        $class = Arr::get((new static)->classMap, $class);
        return new $class();
    }
}
