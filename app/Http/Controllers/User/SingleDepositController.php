<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Deposit;
use App\Models\User;


class SingleDepositController extends Controller
{
    public function singleDeposit(Request $request){
        $singleD = Auth::user()->id;
        $singleDs = Deposit::where('user_id','=',$singleD)->get();
    return view('users.singledeposit',[
        'singleDs' => $singleDs
    ]);

    }}
