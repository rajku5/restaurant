<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use App\Models\Food;
use App\Models\User;
use App\Models\Banner;
use App\Models\Reservation;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function users(){

        $data = User::all();

        return view('admin.user',compact("data"));
    }

    public function deleteuser($id){
        $data = user::find($id);
        $data -> delete();

        return redirect()->back();
    }


    public function delete_reservation($id){
        $data = reservation::find($id);
        $data -> delete();

        return redirect()->back();
    }

    public function deletemenu($id){
        $data = food::find($id);
        $data -> delete();

        return redirect()->back();
    }


    //update food

    public function updatefood($id,Request $request){



            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('foodimage'), $imageName);


            //$data = new Food;

            $data = Food::find($id);

            $data->title = $request->title;
            $data->price = $request->price;
            $data->image = $imageName;
            $data->description = $request->description;
            $data->update();




        return redirect()->back();
    }


    public function editfood($id){

        $data = food::find($id);

        return view('admin.updateview',compact('data'));
    }


    public function foodmenu(){
        $data = food::all();

        return view("admin.foodmenu",compact('data'));
    }


    // insert food

    public function upload(Request $request){
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);



        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('foodimage'), $imageName);

        $data = new Food;

        //image incertion code

       // $image = $request->image;



        $data->image = $imageName;


        // end image incertion

        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->save();

        return redirect()->back()->with('success', 'Food insert successfully!');;




    }


    public function banner_insert(){
        return view('admin.banner_insert');
    }

    public function banner_store(Request $request){
        request()->validate([
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        //dd($request->all());

        $imageName1 = time().'.'.request()->image1->getClientOriginalExtension();
        request()->image1->move(public_path('bannerimage'), $imageName1);

        $data = new Banner;

        //image incertion code

       // $image = $request->image;



        $data->image1 = $imageName1;


        $data->save();

        return redirect()->back();
    }


    public function reservation_view(){
        $data = reservation::all();
        return view('admin.reservation_view',compact('data'));
    }


    //chefs area

    public function viewchefs(){
        return view('admin.adminchefs');
    }

    public function insertchefs(Request $request){

        //dd($request->all());

        request()->validate([
            'chefimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $imageName = time().'.'.request()->chefimage->getClientOriginalExtension();
        request()->chefimage->move(public_path('bannerimage'), $imageName);

        $data = new Chef;


        $data->chefimage = $imageName;
        $data->name = $request->name;
        $data->foodspacial = $request->foodspacial;
        $data->save();

        return redirect()->back();
    }



}
