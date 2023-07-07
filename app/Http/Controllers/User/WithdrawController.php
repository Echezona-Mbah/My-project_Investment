<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Withdraw;
use App\Models\User;

class WithdrawController extends Controller
{
    public function withdraw(Request $request){

        $id=$request->id;
    return view('users.withdraw')->with('id', $id);

    }

    public function withdrawT(Request $request)
    {
        $request->validate([
            'username'=> "required",
            'amount'=> "required",
            'Wallet_p'=> "required",
        ]);
        $register = User::where('username','=', ($request->username))->first();
        if($register){
            $user_id = $register ->id;
           $register_id = $register ->register_id;
        }else{
           return redirect()->back()->with('error', 'correct name are required');
        }
       //  print_r($register_id);die();
        $Withdraw = Withdraw::create([
            'username' => $request->input('username'),
            'amount' => $request->input('amount'),
            'wallet' => $request->input('Wallet_p'),
            'register_id' =>$register_id,
            'user_id' =>$user_id,

        ]);
     return redirect()->back()->with('success', 'Withdraw was successfully add');

    }


}
