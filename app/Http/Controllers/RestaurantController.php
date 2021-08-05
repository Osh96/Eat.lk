<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\User;


class RestaurantController extends Controller
{
    public function menuView()
    {
        
        return view("restaurant.menuView");
    }

    public function upload(Request $request)
    {
        $data = new food;

        $image = $request->image;

        $imagename =time().'.'.$image->getClientOriginalExtension();
                $request->image->move('foodimage',$imagename);

                $data->image=$imagename;

                $data->title=$request->title;

                $data->price=$request->price;

                $data->type=$request->type;

                $data->description=$request->description;

                $data->save();

                return redirect()->back();
        
    }
}
