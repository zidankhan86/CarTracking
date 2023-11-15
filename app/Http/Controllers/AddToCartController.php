<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class AddToCartController extends Controller
{
    public function addToCart($id)
    {

            $product=Device::find($id);
            if($product)
            {
            $cart=session()->get('cart');
//          dd($cart);
            if(!$cart)
            {
                     //step 1: cart empty
                     //add to cart- first product
                   $myCart[$id]=[
                      'title'           =>$product->title,
                      'price'           =>$product->price,
                      'quantity'        =>1,
                      'subtotal'        =>$product->price,//price x quantity
                    ];

                  session()->put('cart',$myCart);
                  toastr()->success('Product added to the cart');

                  return redirect()->back();
            }


            //step 2:Cart not empty but product not exist
            //add to cart

            if(!array_key_exists($id,$cart)){
                 $cart[$id]=[
                    'title'     =>$product->title,
                    'price'     =>$product->price,
                    'quantity'  =>1,
                    'subtotal'  =>$product->price,//price x quantity
                ];

                session()->put('cart',$cart);
                toastr()->success('New product added.');
                     return redirect()->back();

            }

                    //step 3 : cart not empty but product exist
                    // quantity , subtotal update
                    $cart[$id]['quantity']      =     $cart[$id]['quantity']+1;
                    $cart[$id]['subtotal']      =     $cart[$id]['quantity'] * $cart[$id]['price'];
                    session()->put('cart',$cart);

            toastr()->success('Cart updated.');
                    return redirect()->back();
             }

            toastr()->success('No Product Found.');
                    return redirect()->back();

            }

            public function viewCart()
            {
              return view('frontend.pages.viewCart');
            }

            public function clearCart()
            {
                    session()->forget('cart');
                    toastr()->success('Cart Clear Success.');
                    return redirect()->back();
            }

            public function cartItemDelete($id)
            {
              $cart=session()->get('cart');
            //      dd($cart);
                    unset($cart[$id]);
            //      dd($cart);
                    session()->put('cart',$cart);
                    toastr()->success('Item removed.');
                    return redirect()->back();
            }
}
