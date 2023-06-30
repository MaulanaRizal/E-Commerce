<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(){
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

    public function login(){
        return View('login');
    }

    public function loginPost(Request $request){

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($data)){
            $request->session()->regenerate();

            redirect('admin');
        }else{

            return back()->with('failed','Email atau Password salah');

        }
    }
}
