<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    public function index()
    {
        return view('pages/home');
    }
    public function aboutus()
    {
        return view('pages/about');
    }
    public function daftar()
    {
        return view('pages/signup');
    }
}
