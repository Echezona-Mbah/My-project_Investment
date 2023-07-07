<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Deposit;
use Illuminate\Support\Facades\Auth;



class DashbordController extends Controller
{
    public function AdminDashborad(){
        return view('admin.dashborad');
     }

     public function totalDeposit(){
        $user = Auth::user()->id;
        $deposit = Deposit::where('user_id', '=',  $user);
        print_r( $deposit);die();

     }
    //  @php
    //  use App\Http\Controllers\ServiceProvider;
    //  echo ServiceProvider::getLowestPrice($product_cat->id);
    // @endphp

    // @inject('provider', 'App\Http\Controllers\ServiceProvider')
    // <span class="text-bold">
    //     {{ $provider::getLowestPrice($product_cat->id) }}
    // </span>


}
