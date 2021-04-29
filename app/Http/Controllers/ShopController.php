<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Shop;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function seller()
    {
        $orders=Order::where('shop_id',auth()->id())->get();
        $order=count($orders);
       $ordersPerDay=Order::whereDate('created_at', Carbon::today())->get();
        return view('Backend.Shops.index',compact('ordersPerDay','orders','order'));
        //
    }
    public function updateo($itemid){
        $affected=\DB::table('orders')
        ->where('id', $itemid)
        ->where('status','pending')
        ->where('id', 'delivery on progress')
        ->get();
        if (!$affected) {
            \DB::table('orders')
            ->where('id', $itemid)
            ->where('status','pending')
            ->where('id', 'delivery on progress')
            ->update(['status' => 'processing']);
        return back();
        }
        else{
            return back();
        }

    }
    public function onprogress($itemid){

        $affected = \DB::table('orders')
        ->where('id', $itemid)
        ->update(['status' => 'delivery on progress']);
        return back();
    }
    public function processedorders(){
        $orders=Order::where('shop_id',auth()->id())
                         ->where('status','delivery on progress')
                         ->get();
        $totalorder=Order::count();
        $order=count($orders);
        $percent=$order/$totalorder*100;

       $ordersPerDay=Order::whereDate('created_at', Carbon::today())->get();
        return view('Backend.Shops.processed-orders',compact('percent','ordersPerDay','orders','order'));
    }
    public function completed(){
        $completed=Order::where('shop_id',auth()->id())
                          ->where('status','completed')
                          ->get();
        return view('Backend.Shops.completed',compact('completed'));
    }
    public function transaction(){
        //
        $orders=Order::where('shop_id',auth()->id())
                         ->where('status','delivery on progress')
                         ->get();
        return view('Backend.Shops.transactions',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Shops.auth.register');
        //
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);
        $role="seller";
        $data=User::create([
            'name' => $request->name,
            'is_admin'=>'seller',
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    //dd($data);
    return redirect()->route('shops.login');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function loginn()
    {

      return view('Shops.auth.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        $role=User::get('is_admin');
        if ($role ='seller') {
            $credentials = $request->only('email', 'password',);

            if (Auth::attempt($credentials)) {
                //dd(Auth::attempt($credentials));
                $name= auth()->user()->name;
                return redirect()->route('dashboard')->with('success', 'Great! welcome to your shop '.$name);
            }
           return redirect()->route('shops.login')->with('error', 'Oppes! You have entered invalid credentials');
        
        }
     }

    public function logout() {
      Auth::logout();
      return redirect()->route('login');
    }
    public function getsellerProduct(){
        $sellerproducts=Product::where('shop_id',auth()->id())->get();
        return view('Backend.Shops.products',compact('sellerproducts'));
    }
    public function profile(){
        return view('Backend.Shops.profile');
    }
}
