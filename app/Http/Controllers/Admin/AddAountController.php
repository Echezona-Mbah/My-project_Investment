<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Deposit;

class AddAountController extends Controller
{

    public function add(Request $request,$id){

        $edit = Deposit::where('id', $id)->first();
        return view('admin.addAmount')->with('edit',$edit);
    }

    public function store(Request $request, $id)
    {
        $edit = Deposit::where('id', $id)->first();
        $mainAMount =  $edit->amount;
        $amount = $request->amount;
        $total = $amount + $mainAMount;
        $id = $request->id;
        $addUp = Deposit::where('id', $id)->update(['amount'=>$total]);
        return redirect()->back()->with('success', 'add was successfully add');
        // php artisan make:migration add_paid_to_users_table

   }






}
