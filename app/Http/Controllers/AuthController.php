<?php

namespace App\Http\Controllers;

use Auth;
use App\Product;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view('login');
    }

    public function login(){
        request()->validate([
            'email'=>'required',
            'password'=>'required'
        ]); 

        $credentials = ['email' => request()->email, 'password' => request()->password];

        if(Auth::attempt($credentials)){
            $products = Product::all();
            return redirect('/');
        }

        return back()->withErrors([
            'credentials' => 'Incorrect Email or Password'
        ]);
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
