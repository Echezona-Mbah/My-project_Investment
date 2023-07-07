<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
       public function login()
{
    return view('front.login');
}

  public function authenticate(Request $request): RedirectResponse
{
    // print_r("ser");die();
    // $user = Auth::user();
    // print_r($user);die();
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);
     print_r("ser");die();
    // $register = User::where('typeOfUser','=', 'admin')->first();
    // if ($register = User::where('typeOfUser','=', 'admin')->first()) {
    // }
    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->intended('dashboards');
    }

    return back()->error([
        'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');

    // $user = Auth::user();
    // print_r($user);die();



      return redirect()->intended("/dashborads");
}




}
