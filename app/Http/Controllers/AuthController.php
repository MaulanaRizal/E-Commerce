<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }
    
    public function registerPost(Request $request){

        $validate = $request->validate([
            'firstName' => 'required|max:255',
            'email'=>'required|max:255|unique:users,email',
            'password'=>'required|min:6|max:25|confirmed',
            'password_confirmation'=>'required'
        ]);
        
        $user = new User();

        $user->first_name = $request->firstName;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        
        $user->save();
        return back()->with('success','Register Successfuly');
        
    }
}
