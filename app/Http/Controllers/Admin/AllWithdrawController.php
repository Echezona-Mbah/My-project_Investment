<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Withdraw;
use App\Models\Deposit;

class AllWithdrawController extends Controller
{
    public function allWithdraw(){
        $withdraw = Withdraw::all();
        return view('admin.allwithdraw',[
            'withdraw' => $withdraw
        ]);
     }

     public function changeStatus(string $id)
     {
         $withdraw = Withdraw::find($id);
         $user_id =  $withdraw->user_id;
         $withAmount =   $withdraw-> amount;
        //  print_r($reg_id);die();

         if(!$withdraw) return redirect()->back()->with('error', 'Sale was not found!');

         if ($withdraw->status == 'pending') {
             $withdraw->status = 'confirmed';
             $deposit= Deposit::where('user_id','=',  $user_id)->first();
             $depAMount =  $deposit->amount;
             $totalAMount = $depAMount - $withAmount;
             $update = Deposit::where('user_id', $user_id)->first()
             ->update([
                 'amount' =>  $totalAMount
             ]);
             $withdraw->save();
             return redirect()->back()->with('success', 'Good Job, Fund mark is done!');
         } else {
             $withdraw->status = 'pending';
             $withdraw->save();
             return redirect()->back()->with('success', ' Fund is pending!');
         }
     }
}
