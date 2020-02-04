<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home2Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home2');
    }

    public function register()
    {
        return view('register');
    }
}
