<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail\memberContact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

use App\Models\User;
use App\Models\Food;
use App\Models\Cart;
use App\Models\Order;
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
    public function menuview(Request $request)
    {
            $data = food::all();
            
            //return view ('menu',compact("data"));

        //$data=food::select('*')->where('userid','=',$id)->get();
        //$data=food::select('*')->where('user_id','=',$id)->get();

        // $data=food::where('userid')
        // ->join('restaurants','restaurants.id','food.id')
        // ->select('food.*')->where('restaurants.userid','=','food.user_id')
        // ->get();
        

       // return view('menu',compact('data'));

       //$data=restaurants::all();
       return view('menu',compact('data'));

    }
    public function contactusview()
    {
        return view('contactUs');
    }

    public function submitContact(Request $request)
    {
        $data=[
            'name'=> $request ->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'message'=>$request->message,
        ];
        Mail::to('lkeat418@gmail.com')->send(new memberContact($data));

        Session::flash('message', 'Thank you for your email. We will get back to you soon!');
        return redirect()->route('contact.show');
    }

    public function uploadEditRestaurant(Request $request)
    {
        $user_id=Auth::id();

        $datas = new Restaurant;

        $datas->userid=$user_id;

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

            $cart->userid=$user_id;
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

        $datas=cart::select('*')->where('userid','=',$id)->get();
        // // $data=cart::where('user_id',$id)->join('food', 'carts.food_id','=','food.id')->get();
        // return view('showcart',compact("datas"));

        $data=cart::where('userid',$id)->join('food','carts.food_id','=', 'food.id')->get();   
        return view('showcart',compact('data','datas'));

    }

    public function orderconfirm(Request $request)
    {

        foreach($request->foodname as $key =>$foodname)
        {
            $data=new order;

            $data->foodname=$foodname;

            $data->price=$request->price[$key];

            $data->quantity=$request->quantity[$key];

            $data->name=$request->name;

            $data->address=$request->address;

            $data->save();

        }

        
        return redirect()->back();
    }

    public function removecart($id)
    {
        $data=cart::find($id);

        $data->delete();
        return redirect()->back();
    }

    // public function search(Request $request)
    // {
    //     $search=$search->search;//coming from the type in search form

    //     $data=food::where('title','Like','%'.$search.'%')->get();

    //     return view('restaurantView',compact('data'));
    // }

}
