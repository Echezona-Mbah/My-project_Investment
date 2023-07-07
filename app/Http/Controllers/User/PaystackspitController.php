<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class PaystackspitController extends Controller
{
    public static function CreateSubAccount($data){

        $response = Http::withToken('sk_test_b34d7b597f7160fe4e400aaf49bee41af976a3fe')->post
        ("https://api.paystack.co/subaccount",$data);

        return $response ->json();
   }

   public static function Initialize($data){

    $response = Http::withToken('sk_test_b34d7b597f7160fe4e400aaf49bee41af976a3fe')->post
    ("https://api.paystack.co/transaction/initialize",$data);


    return $response ->json();

   }

   public static function varifyPayment($reference){

    $response = Http::withToken('sk_test_b34d7b597f7160fe4e400aaf49bee41af976a3fe')->post
    ("https://api.paystack.co/transaction/verify/",$reference);


    return $response ->json();

   }
}
