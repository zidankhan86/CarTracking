<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function brandForm(){
    return view('backend.pages.brandForm');
}
public function brandStore(Request $request){

$request->validate([
    'brand_name' => 'required|string|max:255',
    'brand_type' => 'required|string|max:255',
]);


//dd($request->all());

Brand::create([

    "brand_name" =>$request->brand_name,
    "brand_type" =>$request->brand_type,
]);

return redirect()->back()->with('success','package added');

}

public function brandTable(){


$brands = Brand::all();
return view('backend.pages.brandList',compact('brands'));
}



public function brandEdit($id){

$brands = Brand::find($id);
return view('backend.pages.brandEdit',compact('brands'));
}

public function brandDelete($id){

$delete = Brand::find($id);

    $delete->delete();


return back()->with('success','deleted');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        //
    }
}
