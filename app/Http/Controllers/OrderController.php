<?php

namespace App\Http\Controllers;

use App\Models\Order;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request as Request;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $cartCollection = \Cart::getContent();
        //dd($cartCollection);
        //$data= $request->input('shipping_phone');
        //dd($data);
        return view('cart.Shopping_cart')->withTitle('SHOPILYV | SHOP')->with(['cartCollection' => $cartCollection]);;
    }
    public function pay(){
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->validate([
            'shipping_fullname' => 'required',
            // 'shipping_state' => 'required',
            // 'shipping_city' => 'required',
            'shipping_address' => 'required',
            'shipping_phone' => 'required',
            // 'shipping_zipcode' => 'required',
            'paymentMethod' => 'required',
        ]);

        $order = new Order();
        $order->notes="to be delivered";
        $order->payment_methods=$request->input('paymentMethod');;
        $order->order_number = uniqid('OrderNumber-');
        $order->shop_id=auth()->id();
        $order->shippping_fullname = $request->input('shipping_fullname');
        //$order->image_path = $request->input('shipping_state');
        // $order->shippping_city = $request->input('shipping_city');
        $order->shippping_address = $request->input('shipping_address');
        $order->shippping_phone = $request->input('shipping_phone');
        // $order->shippping_zipcode = $request->input('shipping_zipcode');
        // $order->shippping_email=$request->input('shipping_email');
        // $order->notes=$request->input('notes');

        if(!$request->has('billing_fullname')) {
            $order->billing_fullname = $request->input('shipping_fullname');
            // $order->billing_state = $request->input('shipping_state');
            // $order->billing_city = $request->input('shipping_city');
            $order->billing_address = $request->input('shipping_address');
            $order->billing_phone = $request->input('shipping_phone');
            // $order->billing_zipcode = $request->input('shipping_zipcode');
        }else {
            $order->billing_fullname = $request->input('billing_fullname');
            // $order->billing_state = $request->input('billing_state');
            // $order->billing_city = $request->input('billing_city');
            $order->billing_address = $request->input('billing_address');
            $order->billing_phone = $request->input('billing_phone');
            // $order->billing_zipcode = $request->input('billing_zipcode');
        }

        $cartItem = \Cart::getContent();
        if (count($cartItem)>0) {
        $order->grant_total = \Cart::getTotal();
        $order->item_count = \Cart::getContent()->count();
        
        $order->user_id = auth()->id();

        // if (request('payment_method') == 'paypal') {
        //     $order->payment_method = 'paypal';
        // }

        $order->save();


        $cartItems = \Cart::getContent();

        foreach($cartItems as $item) {
            $order->items()->attach($item->id, ['price'=> $item->price, 'quantityy'=> $item->quantity]);
        }

        \Cart::clear();
        return redirect()->route('home')->with('success', 'Your order placed successfully and order number is:'.$order->order_number);
    }
    else{
        return back()->with('empty-order', 'your cart is empty,please add products to place order');
        }

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
    public function tahnkyou(){
        return view('thankyou');
    }

}
