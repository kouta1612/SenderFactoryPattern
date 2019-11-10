<?php

namespace App\Http\Controllers;

use App\Services\PaymentFactory;
use Illuminate\Http\Request;

class CartController extends Controller
{
    // 決済の処理
    public function payment(Request $request)
    {
        try {
            $payment = PaymentFactory::create();
        } catch (\Throwable $th) {
            // Error Handling
        }

        try {
            $payment->excecute();
        } catch (\Throwable $th) {
            // Error Handling
        }
    }
}
