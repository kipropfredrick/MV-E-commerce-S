<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Supermarket extends Controller
{
    //supermarket
    public function allgrocery()
    {
           
        return view('categories.Supermarket.Grocery.allgrocery');
    }
    //drinks
    public function Drinks ()
    {

        return view('categories.Supermarket.Grocery.Drinks.Drinks');
    }
    public function beers ()
    {

        return view('categories.Supermarket.Grocery.Drinks.beers');
    }
    public function carbonated()
    {

        return view('categories.Supermarket.Grocery.Drinks.carbonated');
    }
    public function water()
    {

        return view('categories.Supermarket.Grocery.Drinks.water');
    }

    //food capboard
    public function Food ()
    {

        return view('categories.Supermarket.Grocery.Food Capboard.Food');
    }
    public function cerials()
    {

        return view('categories.Supermarket.Grocery.Food Capboard.cerials');
    }
    public function cookingingriedients ()
    {

        return view('categories.Supermarket.Grocery.Food Capboard.cookingingriedients');
    }
    public function snacks()
    {

        return view('categories.Supermarket.Grocery.Food Capboard.snacks');
    }

    //Households supplies
    public function Households ()
    {

        return view('categories.Supermarket.Grocery.Households Supplies.Households');
    }
    public function  bathroomcleaner()
    {

        return view('categories.Supermarket.Grocery.Households Supplies.bathroomcleaner');
    }
    public function bulbbatteries ()
    {

        return view('categories.Supermarket.Grocery.Households Supplies.bulbbatteries');
    }
    public function freshners ()
    {

        return view('categories.Supermarket.Grocery.Households Supplies.freshners');
    }
}

