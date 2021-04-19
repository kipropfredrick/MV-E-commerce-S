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
Route::get('/product/details/', 'ProductController@productDetails')->name('product.details');
Route::get('/product/bread', 'ProductController@productbread')->name('product.bread');
Route::get('/cart/shopping', [App\Http\Controllers\HomeController::class, 'items'])->name('cart.Shopping');

//product related routes
//resource controller for storing product
//get subcategory for product
Route::resource('phones', 'PhonesTabletsController');
Route::get('electronics', 'PhonesTabletsController@electronics')->name('phones.electronics');
Route::get('supermarket', 'PhonesTabletsController@supermarket')->name('phones.electronics');
Route::get('computers','PhonesTabletsController@computers')->name('computers');
Route::get('supermarket','PhonesTabletsController@supermarket')->name('supermarket');
Route::get('fashion','PhonesTabletsController@fashion')->name('fashion');
//function to get product form
Route::resource('product', 'ProductController');
Route::get('category','ProductController@getCategories')->name('product.getCategory');
Route::get('category/subcategory/{id}','ProductController@getSubcategory');
Route::get('/data/related/{slug}', 'ProductController@productsubcategory')->name('product.related');
Route::get('cart/slug/{slug}','ProductController@slugg')->name('home.slug');

