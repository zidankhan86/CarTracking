<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class invoiceController extends Controller
{

    public function invoice($id){
        $invoice = Order::find($id);
        User::with('user')->where('name');
        return view('backend.pages.invoic',compact('invoice'));
    }

    public function status($id){
        $update = Order::find($id);
        $update->update([
            'status'=>'delivered',
        ]);
        return back()->with('success','status updated');
    }

}
