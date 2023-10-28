<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('frontend.pages.category');
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
        try {
             $request->validate([
                'type_name'     => 'required|string',
                'status'        => 'required',
            ]);

            Category::create([
                "type_name"     => $request->type_name,
                "status"        => $request->status,
                "slug"          => Str::slug($request['type_name']),
            ]);

            return back()->withSuccess(['success' => 'Category Create Success!']);
             }
        catch (\Exception $e) {
            toastr()->error('Category Create Failed , Choose another name');
            return back()->withErrors(['error' => 'Category creation failed:']);
            }

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
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
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
       return view('backend.pages.categoryList');
    }

    public function form()
    {
       return view('backend.pages.categoryForm');
    }
}
