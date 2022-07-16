<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Food;
use App\Models\Foodchef;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            return redirect('redirects');
        }
        $data = food::all();
        $data2 = foodchef::all();
        return view("home",compact("data", "data2"));
        
    }

    public function redirects()
    {
        $data = food::all();
        $data2 = foodchef::all();

        $usertype= Auth::user()->usertype;
        if($usertype=='1')
        {
            return view('admin.adminhome');
        }
        else{
            return view('home', compact('data','data2'));
        }
    }
}
