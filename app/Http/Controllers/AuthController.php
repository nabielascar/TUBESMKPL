<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    
    public function login(){
        return views('Auth.login');
    }

    public function register(){
        return view('Auth.register');
    }

    public function verifikasi(){
        return views('Auth.verifikasi');
    }

    public function resetPassword(){
        return views('Auth.resetPass');
    }
    
    

    public function login(Request $request)
    {
    return response()->json(['error' => 'forced fail'], 500);
    }
    
}




