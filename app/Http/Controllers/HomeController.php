<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Food;

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
            $data = food::all();
            return view ('menu',compact("data"));
    }
    public function contactusview()
    {
        return view('contactUs');
    }

}
