<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Fashion extends Controller
{
    //Fashion
    public function Fashion()
    {

        return view('categories.Fashion.Fashion');
    }
    //baby
    public function baby()
    {

        return view('categories.Fashion.Baby.baby');
    }
    public function BabyBoy()
    {

        return view('categories.Fashion.Baby.BabyBoy');
    }
    public function BabyGirl()
    {

        return view('categories.Fashion.Baby.BabyGirl');
    }

    //kids
    public function kids()
    {

        return view('categories.Fashion.Kid`s Fashion.kids');
    }
    public function Boys()
    {

        return view('categories.Fashion.Kid`s Fashion.Boys');
    }
    public function Girls()
    {

        return view('categories.Fashion.Kid`s Fashion.Girls');
    }

    //Men`s Fashion
    public function mens()
    {

        return view('categories.Fashion.Men`s Fashion.mens');
    }
    public function Pants()
    {

        return view('categories.Fashion.Men`s Fashion.Pants');
    }
    public function Shirt()
    {

        return view('categories.Fashion.Men`s Fashion.Shirt');
    }
    public function Short()
    {

        return view('categories.Fashion.Men`s Fashion.Short');
    }

    //Women`s Fashion
    public function women()
    {

        return view('categories.Fashion.Women`s Fashion.women');
    }
    public function Dress()
    {

        return view('categories.Fashion.Women`s Fashion.Dress');
    }
    public function Jeans()
    {

        return view('categories.Fashion.Women`s Fashion.Jeans');
    }
    public function Skirt()
    {

        return view('categories.Fashion.Women`s Fashion.Skirt');
    }
    

}
