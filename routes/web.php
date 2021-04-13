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
Route::post('/add', 'CartController@add')->name('add');
Route::get('/cart', 'CartController@cart')->name('cart.index')->middleware('auth');
Route::post('/update', 'CartController@update')->name('cart.update')->middleware('auth');
Route::post('/remove', 'CartController@remove')->name('cart.remove')->middleware('auth');
Route::post('/clear', 'CartController@clear')->name('cart.clear')->middleware('auth');
//checkout routes
Route::get('/checkout', 'CartController@create')->name('checkout')->middleware('auth');
//orders routes
Route::resource('orders', 'OrderController')->middleware('auth');
//Route::post('/oders/store', 'OrderController@store')->name('orders.store');
//ROUTES FOR PRODUCTS
Route::get('/product/details', 'ProductController@productDetails')->name('product.details')->middleware('auth');
Route::get('/product/bread', 'ProductController@productbread')->name('product.bread')->middleware('auth');
Route::get('/cart/shopping', [App\Http\Controllers\HomeController::class, 'items'])->name('cart.Shopping');
Route::resource('product', 'ProductController')->middleware('auth');
Route::resource('product', 'ProductController')->middleware('auth');

