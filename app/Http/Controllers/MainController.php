<?php

namespace App\Http\Controllers;

use App\Services\AccountFactory;

class MainController extends Controller
{
    public function main()
    {
        $factory = new AccountFactory();
        $account1 = $factory->create("Ralph Johnson");
        $account2 = $factory->create("Richard Helm");
        $account3 = $factory->create("John Vlissides");
        $account4 = $factory->create("Erich Gamma");
        $account1->use();
        $account2->use();
        $account3->use();
        $account4->use();
    }
}
