<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Device;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function placeOrder($id)
    {
        $devices =Device::find($id);
       return view('frontend\components\paceOrder\placeOrder',compact('devices'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',


        ]);

        //dd($request->all());



        Device::create([

            "name"=>$request->name,
            "tour_id"=>$request->tour_id,
            "phone"=>$request->phone,
            "email"=>$request->email,
            "address"=>$request->address,
            "price" =>$request->amount,
            "currency" =>$request->currency,
            "status"=>"Pending"

        ]);
        toastr()->success('Success ', 'Thank You For yor order ');
        return to_route('home');
    }


    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
