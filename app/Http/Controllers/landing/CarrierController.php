<?php

namespace App\Http\Controllers\landing;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarrierController extends Controller
{
    public function index()
    {
        return view('landing.carier');
    }
}
