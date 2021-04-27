<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class MpesaController extends Controller
{
    //
    public function payment(Request $request){

        //$paid->user_id=auth()->id();
        $paid=\Cart::getContent()->count();
        if ($paid >0) {
            $paid=new Payment();
            $paid->grant_total=\Cart::getTotal();
        //$paid->phone=auth()->user()->phone;
        $paid->save();
        return redirect()->route('orders.create')->with('paid', 'Payment successfull!');

        }
        else{

           return redirect()->back()->with('paid','add products to cart!');

        }

    }
}
