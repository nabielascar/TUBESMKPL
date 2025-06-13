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
    
    
}
public function invalidSyntax() {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    return "Ini adalah kode rusak // Tanpa penutup string atau semicolon
}



