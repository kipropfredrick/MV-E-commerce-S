<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    //
    public function shop()
    {
        $product=Product::where('price','>',500)->inRandomOrder()->get()->take(8);
        //dd($products);
        $category=Categories::get();
        return view('shop')->withTitle('SHOPILYV | SHOP')->with(['products' => $product,'category'=>$category]);
    }
    public function create()
    {
        //]
        return view('checkout.checkout');
    }
    public function cart()  {
        $cartCollection = \Cart::getContent();
        //dd($cartCollection);
        return view('cart.shopping_cart')->withTitle('SHOPILYV | SHOP')->with(['cartCollection' => $cartCollection]);;
}
public function add(Product $product){
    \Cart::add(array(
        'id' => $product->id,
        'name' => $product->name,
        'price' => $product->price,
        'quantity' => 1,
        'attributes' => array(),
        'associatedModel' => $product
        ));
    return redirect()->route('shop')->with('success_msg', 'Item is Added to Cart!');
}
public function remove(Request $request){
    \Cart::remove($request->id);
    return redirect()->route('cart.index')->with('success_msg', 'Item is removed!');
}
public function update(Request $request){
    \Cart::update($request->id,
        array(
            'quantity' => array(
                'relative' => false,
                'value' => $request->quantity
            ),
    ));
    return redirect()->route('cart.index')->with('success_msg', 'Cart is Updated!');
}
public function clear(){
    \Cart::clear();
    return redirect()->route('cart.index')->with('success_msg', 'Car is cleared!');
}
public function Checkout(){
    return view('checkout.checkout');
}

}
