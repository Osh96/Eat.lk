<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Food;
use App\Models\Cart;
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

        // $data=food::select('*')->where('user_id','=',$id)->get();
        // return view('menu',compact("data"));

    }
    public function contactusview()
    {
        return view('contactUs');
    }
    public function uploadEditRestaurant(Request $request)
    {
        $user_id=Auth::id();

        $datas = new Restaurant;

        $datas->user_id=$user_id;

        $image = $request->image;

        $imagename =time().'.'.$image->getClientOriginalExtension();
                $request->image->move('restaurantImage',$imagename);

                $datas->image=$imagename;

                $datas->title=$request->title;

                $datas->description=$request->description;

                $datas->save();

                return redirect()->back();


    }

    public function addcart(Request $request,$id)
    {
        if(Auth::id())
        {
            $user_id = Auth::id();

            $foodid=$id;

            $quantity=$request->quantity;

            $cart=new Cart;

            $cart->user_id=$user_id;
            $cart->food_id=$foodid;
            $cart->quantity=$quantity;

            $cart->save();
            
            return redirect()->back();
           
        }
        else
        {
            return redirect('/login');
        }
    }

    public function showcart(Request $request,$id)
    {
        $datas=cart::select('*')->where('user_id','=',$id)->get();
        $data=cart::where('user_id',$id)->join('food','carts.food_id','=','food.id')->get();
        return view('showcart',compact("data","datas"));


    }

    public function removecart($id)
    {
        $data=cart::find($id);

        $data->delete();
        return redirect()->back();
    }

}
