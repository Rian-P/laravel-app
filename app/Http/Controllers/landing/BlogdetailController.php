<?php

namespace App\Http\Controllers\landing;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogdetailController extends Controller
{
    public function index()
    {
        return view('landing.blogdetail');
    }
}
