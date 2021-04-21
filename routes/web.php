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
//phonestablets/phones
Route::get('phones','PhonesTabletsController@phones')->name('phones');
Route::get('apple','PhonesTabletsController@apple')->name('apple');
Route::get('huwawei','PhonesTabletsController@infinix')->name('infinix');
Route::get('infinix','PhonesTabletsController@huwawei')->name('huwawei');
Route::get('lenovo','PhonesTabletsController@lenovo')->name('lenovo');
Route::get('motorola','PhonesTabletsController@motorola')->name('motorola');
Route::get('nokia','PhonesTabletsController@nokia')->name('nokia');
Route::get('samsung','PhonesTabletsController@samsung')->name('samsung');
Route::get('sony','PhonesTabletsController@sony')->name('sony');
Route::get('ulefone','PhonesTabletsController@ulefone')->name('ulefone');
Route::get('wiko','PhonesTabletsController@wiko')->name('wiko');
Route::get('xiaomi','PhonesTabletsController@xiaomi')->name('xiaomi');
//phonestablets/tablets
Route::get('tablets','PhonesTabletsController@tablets')->name('tablets');
Route::get('kidstablet','PhonesTabletsController@kidstablet')->name('kidstablet');
Route::get('samsung_tablets','PhonesTabletsController@samsung_tablets')->name('samsung_tablets');
Route::get('tcl_tab','PhonesTabletsController@tcl_tab')->name('tcl_tab');

//supermarket
//Grocery
Route::get('allgrocery','Supermarket@allgrocery')->name('allgrocery');
//Drinks
Route::get('beers','supermarket@beers')->name('beers');
Route::get('carbonated','Supermarket@carbonated')->name('carbonated');
Route::get('water','Supermarket@water')->name('water');
//food capboard
Route::get('cerials','Supermarket@cerials')->name('cerials');
Route::get('cookingingriedients','supermarket@cookingingriedients')->name('cookingingriedients');
Route::get('snacks','Supermarket@snacks')->name('tcl_tab');
//households
Route::get('bathroomcleaner','Supermarket@bathroomcleaner')->name('bathroomcleaner');
Route::get('bulbbatteries','Supermarket@bulbbatteries')->name('bulbbatteries');
Route::get('freshners','Supermarket@freshners')->name('freshners');


