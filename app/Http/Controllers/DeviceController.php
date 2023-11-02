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
        $devices =Device::all();
       return view('frontend.pages.device',compact('devices'));
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
            'title' => 'required|string',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'monthly_charge' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Modify file validation as needed
            'status' => 'required|in:0,1',
            'description' => 'required|string',
            'features' => 'array|nullable', // Allow an array of features
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('uploads', $imageName, 'public');
        } else {
            $imageName = null;
        }

        // Create the device
        $device = new Device([
            'title' => $request->input('title'),
            'price' => $request->input('price'),
            'category_id' => $request->input('category_id'),
            'monthly_charge' => $request->input('monthly_charge'),
            'image' => $imageName,
            'status' => $request->input('status'),
            'description' => $request->input('description'),
            'features' => json_encode($request->input('features'))
        ]);

        $device->save();

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

    public function FeaturesForm()
    {
        //$devices = Category::all();
        return view('backend.pages.deviceForm',compact('devices'));
    }

    public function FeaturesList()
    {
        //$devices = Category::all();
        return view('backend.pages.deviceForm',compact('devices'));
    }

    public function details($id)
    {
        $devices =Device::find($id);
       return view('frontend.pages.details',compact('devices'));
    }

    public function latest()
    {
        $devices = Device::latest()->limit(3)->get();
        Device::with('category')->where('type_name');

       return view('frontend.pages.latestDevice',compact('devices'));
    }



}
