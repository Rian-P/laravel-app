<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function index()
    {
        return view('landing.portofolio');
    }
}
