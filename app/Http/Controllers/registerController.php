<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;


class registerController extends Controller
{
     public function register()
 {
     return view('front.register');
 }


 public function store(Request $request)
  {
// dd($dd);
     $request->validate([
         'name'=> 'required|unique:registers,name',
         'username'=> 'required',
         'email'=> 'required|email|unique:registers,email',
         'password'=> 'required|confirmed'
     ]);
//  $dd = (request()->get('ref') );
     $user = User::create([
         'name' => $request->input('name'),
         'username' => $request->input('username'),
         'email' => $request->input('email'),
         'password' => Hash::make($request->input('password')),
         'reference' => $this->set_number(),
         'referral_id' => (request()->get('ref') ? request()->get('ref') :'null' ),
     ]);
     event(new Registered($user));

     Auth::login($user);
     return redirect(RouteServiceProvider::HOME);

 }

 public function generateUniqueCode()
 {
     do {
         $code = random_int(100000, 999999);
     } while (register::where("register_id", "=", $code)->first());

         return $code;
 }

public function set_number() {
    $number = mt_rand(10000, 99999);

    return register::where('register_id', $number)->exists() ? $this->set_number() : $number;
}



}
