<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();
Route::get('/home', [App\Http\Controllers\CartController::class, 'shop'])->name('home');
Route::get('/', 'CartController@shop')->name('shop');

//cart related routes
Route::get('add-to-cart/{product}','CartController@add')->name('add.cart');
Route::get('/cart', 'CartController@cart')->name('cart.index');
Route::post('/update', 'CartController@update')->name('cart.update');
Route::post('/remove', 'CartController@remove')->name('cart.remove');
Route::post('/clear', 'CartController@clear')->name('cart.clear');

//checkout routes
Route::get('/checkout', 'CartController@create')->name('checkout')->middleware('auth');
//orders routes
Route::resource('orders', 'OrderController')->middleware('auth');
//Route::post('/oders/store', 'OrderController@store')->name('orders.store');
//ROUTES FOR PRODUCTS
//product related routes
//resource controller for storing product
//get subcategory for product
Route::resource('Phones&tablets', 'PhonesTabletsController');
Route::get('phonestables', 'PhonesTabletsController@phonetablet')->name('phonestablets');
Route::get('phones','PhonesTabletsController@phones')->name('phones');


