<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login()
    {
        return view('auth.login');
    }

    public function loginUser(Request $request)
    {

        $user = $request->validate([

        ]);

        return $user;
    }

    public function register(Request $request)
    {
        return view('auth.register');
    }


    public function logout(Request $request)
    {
        Auth::logout();
        
        return redirect()->route('login');
    }
}
