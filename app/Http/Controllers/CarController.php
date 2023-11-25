<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Brand;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function addCar(){

        $brands=Brand::all();
        return view('backend.pages.carForm',compact('brands'));
    }

    public function CarStore(Request $request){
        //dd($request->all());


        $request->validate([
            'car_name' => 'required|string|max:255',
            'fuel_type' => 'required|string|max:255',
            'fee' => 'required|numeric|min:0',
            'sit' => 'required|integer|min:2|max:16',
            'stock' => 'required|integer|min:0|max:100',
            'description' => 'required|string',
        ]);



        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = date('Ymdhis').'.'.$request->image->extension();
            $request->image->storeAs('uploads', $imageName, 'public');
        }

        //dd($imageName);



        Car::create([
            "brand_id" =>$request->brand_id,
            "car_name" =>$request->car_name,
            "fuel_type" =>$request->fuel_type,
            "image" =>$imageName,
            "fee" =>$request->fee,
            "sit"=>$request->sit,
            "stock"=>$request->stock,
            "description" =>$request->description,
        ]);


        return back()->with('success','Car Post Added');

    }

    public function CarTable(){

        $cars = Car::all();
        return view('backend.pages.carList',compact('cars'));
    }


    public function CarEdit($id){

        $brands = Brand::all();
        $cars = Car::find($id);
        return view('backend.pages.carEdit',compact('cars','brands'));
    }

    public function CarUpdate($id, Request $request){

        $request->validate([
            'car_name' => 'required|string|max:255',
            'fuel_type' => 'required|string|max:255',
            'fee' => 'required|numeric|min:0',
            'sit' => 'required|integer|min:2|max:16',
            'description' => 'required|string',
        ]);



        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = date('Ymdhis').'.'.$request->image->extension();
            $request->image->storeAs('uploads', $imageName, 'public');
        }


        $update = car::find($id);

        $update->update([

            "brand_id" =>$request->brand_id,
            "car_name" =>$request->car_name,
            "fuel_type" =>$request->fuel_type,
            "image" =>$imageName,
            "fee" =>$request->fee,
            "sit"=>$request->sit,
            "description" =>$request->description,



        ]);


        return back()->with('success','Car Updated');
    }

    public function Cardelete($id){
        $delete = Car::find($id);

        $delete->delete();

        return back()->with('success','Car Deleted');
    }

    public function car(){
        $cars = Car::simplePaginate(6);

        Car::with('car')->where('brand_id');

        return view('frontend.pages.car',compact('cars'));
    }

    public function carDetails($id){
        $details = Car::find($id);
        $cars = Car::with('brand')->simplePaginate(6);
        return view('frontend.pages.carDetails',compact('details','cars'));
    }
}
