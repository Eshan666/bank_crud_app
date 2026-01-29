<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function loginForm(){
        return view('loginPage');
    }

    function processLogin(Request $request){
        $credentials = $request->validate([
            'email' => 'email|required',
            'password' => 'required'

        ]);

        if(Auth::attempt($credentials)){
            return redirect('/display-data');
        }

        return redirect('login-form')->with('loginFailed','Login Failed');

    }

    function registerForm(){
        return view('registrationPage');
    }

    function processRegistration(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:3|confirmed',
        ]);

        USER::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,

        ]);
        return redirect('/login-form')->with('Reg','succesful');

    }
}
