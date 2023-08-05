<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Chef;
use App\Models\Banner;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index(){
        $fooddata = Food::all();
        $data = Banner::all();
        $chefs = Chef::all();
        //'$message = "Your table reservation successfully";
        return view('home',compact('fooddata','data','chefs'));
    }

    public function redirects(){
        $fooddata = Food::all();
        $data = Banner::all();
        $chefs = Chef::all();
        $usertype = Auth::user()->usertype;

        if($usertype =='1')
        {
            return view('admin.adminhome');
        }
        else
        {
            return view('/',compact('fooddata','data','chefs'));
        }
    }

    public function store(Request $request){
        $data = new Reservation;



        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->number_guests = $request->number_guests;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->message = $request->message;
        $data->save();



        return redirect()->back()->with('success','table reserved successfully');
    }
}
