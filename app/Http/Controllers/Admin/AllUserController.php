<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AllUserController extends Controller
{
    public function allUser(){
        $user = User::all();
        return view('admin.alluser',[
            'user' => $user
        ]);
     }
}
