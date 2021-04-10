<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //]
        return view('checkout.checkout');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'shipping_fullname' => 'required',
            'shipping_state' => 'required',
            'shipping_city' => 'required',
            'shipping_address' => 'required',
            'shipping_phone' => 'required',
            'shipping_zipcode' => 'required',
            'payment_method' => 'required',
        ]);

        $order = new Order();
        $order->user_id=auth()->id();

        $order->order_number = uniqid();
        $order->custome_name = auth()->User()->name;

        $order->shipping_fullname = $request->input('shipping_fullname');
        $order->shipping_state=$request->input('shipping_state');
        $order->shipping_state=$request->input('shipping_state');
        $order->shipping_city=$request->input('shipping_city');
        $order->shipping_address=$request->input('shipping_address');
        $order->shipping_phone=$request->input('shipping_phone');
        $order->shipping_zipcode=$request->input('shipping_zipcode');
        $order->payment_methods=$request->input('payment_method');

        if(!$request->has('billing_fullname')) {
            $order->billing_fullname = $request->input('shipping_fullname');
            $order->billing_state=$request->input('shipping_state');
            $order->billing_city=$request->input('shipping_city');
            $order->billing_address=$request->input('shipping_address');
            $order->billing_phone=$request->input('shipping_phone');
            $order->billing_zipcode=$request->input('shipping_zipcode');
        }
        else{
            $order->billing_fullname = $request->input('shipping_fullname');
            $order->billing_state=$request->input('shipping_state');
            $order->billing_city=$request->input('shipping_city');
            $order->billing_address=$request->input('shipping_address');
            $order->billing_phone=$request->input('shipping_phone');
            $order->billing_zipcode=$request->input('shipping_zipcode');
        }
        //$cartItems = \Cart::session(auth()->id())->getContent();
        $cartItems = \Cart::getContent();
        foreach($cartItems as $items){
            $items->grant_total = \Cart::session(auth()->id())->getTotal();
            $items->item_count = \Cart::session(auth()->id())->getContent()->count();
           }
           $order->grant_total=$items->grant_total;
           $order->item_count=$items->item_count;
        $order->save();
        \Cart::session(auth()->id())->clear();
        return redirect()->route('home')->withMessage('Order has been placed');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
