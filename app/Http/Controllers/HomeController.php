<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Food;
use App\Models\Restaurant;

class HomeController extends Controller
{
    public function index()
    {
        $datas = Restaurant::all();
        return view("home",compact("datas"));
    }

    public function restaurantview()
    {
        $datas = Restaurant::all();
        return view('restaurantView',compact("datas"));
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
    public function uploadEditRestaurant(Request $request)
    {
        $datas = new Restaurant;

        $image = $request->image;

        $imagename =time().'.'.$image->getClientOriginalExtension();
                $request->image->move('restaurantImage',$imagename);

                $datas->image=$imagename;

                $datas->title=$request->title;

                $datas->description=$request->description;

                $datas->save();

                return redirect()->back();


    }

}
