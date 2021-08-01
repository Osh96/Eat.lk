<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("home");
    }

    public function restaurantview()
    {
        return view('restaurantView');
    }
    public function menuview()
    {
            return view ('menu');
    }
    public function contactusview()
    {
        return view('contactUs');
    }

}
