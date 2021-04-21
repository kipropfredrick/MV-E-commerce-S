<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class PhonesTabletsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function phonetablet()
    {

        // $phones=Product::where('category_id',1)->get();
       //dd($phones);
        return view('categories.phoneandtablets.Phonestablets');
    }

    public function phones()
    {


        return view('categories.phoneandtablets.Phones.all_phones_types');
    }
    public function apple()
    {


        return view('categories.phoneandtablets.Phones.phone_types.apple');
    }
    public function huwawei()
    {


        return view('categories.phoneandtablets.Phones.phone_types.huwawei');
    }
    public function infinix()
    {


        return view('categories.phoneandtablets.Phones.phone_types.infinix');
    }
    public function lenovo()
    {


        return view('categories.phoneandtablets.Phones.phone_types.lenovo');
    }
    public function motorola()
    {


        return view('categories.phoneandtablets.Phones.phone_types.motorola');
    }
    public function nokia()
    {


        return view('categories.phoneandtablets.Phones.phone_types.nokia');
    }
    public function samsung()
    {


        return view('categories.phoneandtablets.Phones.phone_types.samsung');
    }
    public function sony()
    {


        return view('categories.phoneandtablets.Phones.phone_types.sony');
    }
    public function ulefone()
    {


        return view('categories.phoneandtablets.Phones.phone_types.ulefone');
    }
    public function wiko()
    {


        return view('categories.phoneandtablets.Phones.phone_types.wiko');
    }
    public function xiaomi()
    {


        return view('categories.phoneandtablets.Phones.phone_types.xiaomi');
    }
//phonestablets/tablets view

     public function tablets()
    {


    return view('categories.phoneandtablets.Tablets.all_tablets_types');
    }
    public function kidstablet()
    {


    return view('categories.phoneandtablets.Tablets.Tablets.kids_tablets');
    }
    public function samsung_tablets()
    {


    return view('categories.phoneandtablets.Tablets.Tablets.samsung_tablets');
    }
    public function tcl_tab()
    {


    return view('categories.phoneandtablets.Tablets.Tablets.tcl_tab');
    }












    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
    public function computers(){
        $computers=Product::where('category_id',3)->get();
        //dd($computers);
        return view('categories.electronic.subcat',compact('computers'));

    }
    public function supermarket(){
        $computers=Product::where('category_id',2)->get();
        //dd($computers);
        return view('categories.electronic.subcat',compact('computers'));

    }
    public function fashion(){
        $computers=Product::where('category_id',4)->get();
        //dd($computers);
        return view('categories.electronic.subcat',compact('computers'));

    }
}
