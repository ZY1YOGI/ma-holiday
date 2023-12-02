<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        return view('auth.login');
    }


    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
