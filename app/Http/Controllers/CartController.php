<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Sub_category;

class CartController extends Controller
{
    //
    public function shop()
    {

            $product=Product::where('price','>',500)->inRandomOrder()->take(6)->get();
            $sales = \DB::table('products')
                ->leftJoin('order__items','products.id','=','order__items.product_id')
                ->selectRaw('products.*, COALESCE(count(order__items.product_id)) total')
                ->where('order__items.product_id','>',0)
                ->groupBy('products.id')
                ->orderBy('total','desc')
                ->take(6)
                ->get();
                //dd($sales);
            $bestproduct=Sub_category::with(relations:'product')->inRandomOrder()->take(6)->get();
            $subcategories=Sub_category::get();
            $sproduct=Sub_category::with(relations:['product'])->first();

            $category=Categories::get();

            return view('shop')->withTitle('SHOPILYV | SHOP')->with(['sales'=>$sales,'subcategories'=>$subcategories,'bestproduct'=>$bestproduct,'sproduct'=>$sproduct,'products' => $product,'category'=>$category]);

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
        return back()->with('cart', 'Product added to cart successfully');
    //return redirect()->route('shop')->with('success_msg', 'Item is Added to Cart!');
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
