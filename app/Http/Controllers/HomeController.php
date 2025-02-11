<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
    public function about()
    {
        return view('about');
    }
    public function howItWorks()
    {
        return view('how-it-works');
    }
    public function features()
    {
        return view('welcome');
    }
}
