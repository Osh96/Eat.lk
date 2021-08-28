<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\User;
use App\Models\Menu;
use App\Models\Restaurant;

class AdminController extends Controller
{
    public function userView()
    {
        $data=user::all();
        return view("admin.UserView",compact("data"));
    }

    public function deleteuser($id)
    {
        $data=user::find($id);
        //$data2=Restaurant::select('*')->where('user_id','=',$id)->get(); 
        $data->delete();
        //$data2->delete();
        return redirect()->back();
    }
}
