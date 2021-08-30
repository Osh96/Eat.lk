<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Food;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Restaurant;


class RestaurantController extends Controller
{
    public function menuView()
    {
        
        return view("restaurant.menuView");
        // $data=food::select('*')->where('user_id','=',$id)->get();
        // return view('menu',compact("data"));
        // $datas=food::select('*')->where('user_id','=',$id)->get();
        // $data=cart::where('user_id',$id)->join('food','carts.food_id','=','food.id')->get();
        // return view('showcart',compact("data","datas"));
    }

    public function mainMenuView()
    {
        $data = food::all();
        return view("restaurant.mainMenuView", compact("data"));

    }

    public function restaurantEditView()
    {
        $data = User::all();
        return view("restaurant.restaurantEditView",compact("data"));
    }

    public function upload(Request $request)
    {
        $user_id = Auth::id();

        $data = new food;

        $data->user_id=$user_id;

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

   

    public function deletefooditem($id)
    {
        $data=food::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function orders()
    {
        $data=order::all();

        return view ('restaurant.orders',compact('data'));
    }

    public function search(Request $request)
    {
        $search=$request->search;

        $data=food::where('title','like','%'.$search.'%')->get();

        return view ('restaurant.mainMenuView',compact('data'));
    }
}
