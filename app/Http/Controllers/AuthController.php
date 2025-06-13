<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{

    

    public function registrasi(Request $request)
{
    // Paksa error agar CI gagal
    throw new \Exception('Forced error for testing CI failed');
    // ...existing code...
}

    
    

    public function login(){
        return view('Auth.loginn');
    }

    public function register(){
        return view('Auth.register');
    }

    public function verifikasi(){
        return view('Auth.verifikasi');
    }


    public function login(Request $request)
    {
    return response()->json(['error' => 'forced fail'], 500);
    }
    
}




