<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login() {
        return view('landing.login');
    }

    public function login_v2() {
        return view('landing.login-v2');
    }
    
}