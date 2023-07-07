<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Deposit;


class Dashboard extends Controller
{
    public function dashboards(){
        // $user = Auth::user();
        // print_r($user);die();
    return view('users.dashboards');
 }

 public static function totalDeposit(){
    $user = Auth::user()->id;
    $deposit = Deposit::where('user_id', '=',  $user)->where('status', '=', 'confirmed')->sum('amount');
    return   $deposit;
 }

 public static function totalDepositMake(){
    $user = Auth::user()->id;
    $deposit = Deposit::where('user_id', '=',  $user)->sum('amount');
    return   $deposit;
 }

 public static function url(){
    $url = "https://blockchain.info/stats?format=json";
    $stats = file_get_contents($url);
    $json = json_decode($stats,true);
    $btcvalum = $json['market_price_usd'];
    $_SESSION['btc_value'] = $btcvalum;
    return $btcvalum;
}
public static function BTC($amount){
     $btcValue = $this->url();
     $currBTC = $amount / $btcValue;
     return $currBTC;
 }

 public static function btcc($userId){
    $totals = $this->totalDepositMake();
    print_r($rr);die();
    return $rr;
}

}
