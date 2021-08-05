<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Menu;

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
        $data->delete();
        return redirect()->back();
    }
}
