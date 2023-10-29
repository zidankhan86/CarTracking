<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend\pages\home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function form()
    {
        $devices = Category::all();
        return view('backend.pages.deviceForm',compact('devices'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'price' => 'required|numeric',
            'monthly_charge' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required',
            'description' => 'required',
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {
            $imageName = date('Ymdhis'). '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('uploads', $imageName, 'public');
        }

        Device::create([
            "title" => $request->title,
            "price" => $request->price,
            "category_id" => $request->category_id,
            "monthly_charge" => $request->monthly_charge,
            "image" => $imageName,
            "status" => $request->status,
            "description" => $request->description,
        ]);

        return redirect()->back()->withSuccess('Device added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Device $device)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Device $device)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Device $device)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Device $device)
    {
        //
    }

    public function list()
    {
        return view('backend.pages.deviceList');
    }
}
