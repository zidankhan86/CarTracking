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

}
