<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function login()
    {
        return view("login.login");
    }

    public function loginproses(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('transaksi');
        }
        return redirect('login');
    }

    public function register(){
        return view("login.register");
    }
    public function logout(){
        Auth::logout();
        return redirect('login');
    }

    public function registeruser(Request $request){
        User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=>bcrypt($request->password),
        ]);
        return Redirect()->route('login');
    }
}
