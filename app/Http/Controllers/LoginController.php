<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;

class LoginController extends Controller
{
    public function login(){
        return view("login");
    }

    public function register(){
        return view("register");
    }

    public function registeruser(Request $request){
        // dd($request->all());
        user::create([
            'name' => $request->name,
            'email' => $request->id,
            'password' => bcrypt($request->pass),
            'remember_token' => Str::random(60),
        ]);
        return redirect('/login');
    }

    public function loginproses(Request $request){
        if(auth::attempt($request->only('id','pass'))){
            return redirect('/');
        }
        return redirect('/login');
    }
}
