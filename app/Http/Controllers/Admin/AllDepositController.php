<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Deposit;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class AllDepositController extends Controller
{
    public function allDeposit(){

        $deposit = Deposit::all();
        return view('admin.alldeposit',[
            'deposit' => $deposit
        ]);

        foreach (Deposit::all() as $flight) {
            echo $flight->referral_id;
        }
        $User = User::where('reference', $flight->referral_id)->first();
        $users = $User->name;
        return view('admin.alldeposit', compact('users'));


     }

     public function changeStatus(string $id)
     {
         $deposit = Deposit::find($id);

         if(!$deposit) return redirect()->back()->with('error', 'Sale was not found!');

         if ($deposit->status == 'pending') {
             $deposit->status = 'confirmed';
             $deposit->save();
             return redirect()->back()->with('success', 'Good Job, Fund mark is done!');
         } else {
             $deposit->status = 'pending';
             $deposit->save();
             return redirect()->back()->with('success', ' Fund is pending!');
         }
     }

    //  public function ref (){
    //     $deposit = Deposit::find($id);
    //  }




}
