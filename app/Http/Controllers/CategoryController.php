<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Device;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    //Backend
    public function form()
    {
       return view('backend.pages.categoryForm');
    }


    //Frontend
    public function index()
    {
        $categories = Category::all();
       return view('frontend.pages.category',compact('categories'));
    }


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
                'type_name'  => 'required',
                'status'     => 'required',
                'image'      => 'nullable'
            ]);

            $image = null;

            if ($request->hasFile('image')) {
                $image = date('YmdHis') . '.' . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->storeAs('uploads', $image, 'public');
            }

            Category::create([
                "type_name" => $request->type_name,
                "status" => $request->status,
                "image" => $image
            ]);

            return back()->withSuccess(['success' => 'Category Create Success!']);

    }


    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $cat = Category::find($id);
        return view('backend.pages.categoryEdit',compact('cat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $category = Category::find($id);

        $image = null;

            if ($request->hasFile('image')) {
                $image = date('YmdHis') . '.' . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->storeAs('uploads', $image, 'public');
            }

        $category->update([
            "type_name" => $request->type_name,
            "status" => $request->status,
            "slug" => Str::slug($request['type_name']),
            "image" => $image

        ]);
        return back()->with('success','updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
    public function list()
    {
        $cat = Category::all();
       return view('backend.pages.categoryList',compact('cat'));
    }


    //Cat Wise Product
    public function CategoryWise($id)
    {


        $devices = Device::where('category_id', $id)
                          ->where('status', 1)
                          ->get();


        $categories =Device::find($id);
       return view('frontend.pages.categoryWiseDevice',compact('devices','categories'));
    }


}
