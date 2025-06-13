<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
<<<<<<< Updated upstream
    public function login(){
        return view('Auth.loginn');
    }

    public function register(){
        return view('Auth.register');
    }

    public function verifikasi(){
        return view('Auth.verifikasi');
    }

    public function resetPassword(){
        return view('Auth.resetPass');
    }
    
    
=======
    
    public function login(){
        return views('Auth.login');
    }

    public function register(){
        return view('Auth.registerr');
    }

    public function verifikasi(){
        return views('Auth.verifikasii');
    }

    public function resetPassword(){
        return views('Auth.resetPass');
    }
    
    

    
    
>>>>>>> Stashed changes
}





