<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    
<<<<<<< Updated upstream
=======
    public function registrasi(Request $request)
{
    // Paksa error agar CI gagal
    throw new \Exception('Forced error for testing CI failed');
    // ...existing code...
}
>>>>>>> Stashed changes
    
    

    public function login(Request $request)
    {
    return response()->json(['error' => 'forced fail'], 500);
    }
    
}




