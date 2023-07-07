<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class EditProfileController extends Controller
{
    public function edit(Request $request){
        $edit = Auth::user()->id;
        $edits = User::where('id','=',$edit)->get();
    //  print_r( $edits);die();
    return view('users.editProfile',[
        'edits' => $edits
    ]);

    }

    public function editId($id){
        $edit = User::find($id);
        return view('users.updateProfile',compact('edit'));

    }


    public function update(Request $request,$id){
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->update();
        return redirect()->back()->with('success','user Updated Successfully');
    }
}
