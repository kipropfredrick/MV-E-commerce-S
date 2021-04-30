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
Route::resource('product', 'ProductController');
Route::post('store/product', 'ProductController@pstore')->name('product.store');
Route::get('cart/slug/{slug}','ProductController@slugg')->name('home.slug');
Route::get('/data/related/{slug}', 'ProductController@productsubcategory')->name('product.related');
Route::get('category','ProductController@getCategories')->name('create.product');
Route::get('category/subcategory/{id}/','ProductController@getSubcategory');
Route::get('products','ProductController@allproducts')->name('all');

//checkout routes
Route::get('/checkout', 'CartController@create')->name('checkout')->middleware('auth');
//orders routes
Route::resource('orders', 'OrderController')->middleware('auth');
Route::get('orders/thankyou', 'OrderController@thankyou')->name('orders.thankyou')->middleware('auth');

Route::get('orders/thankyou', 'OrderController@thankyou')->name('orders.thankyou')->middleware('auth');

//shop related routes
Route::get('shop', 'ShopController@index')->name('shop.index');
Route::post('g','ShopController@store')->name('g');
Route::resource('shops', 'ShopController');
Route::get('shops', 'ShopController@loginn')->name('shops.login');
Route::get('seller/products', 'ShopController@getsellerProduct')->name('getproducts');
Route::get('sell/seller/profile', 'ShopController@profile')->name('profile');
Route::get('sell/dashboard', 'ShopController@seller')->name('dashboard');
Route::get('sell/processed/orders', 'ShopController@processedorders')->name('processedorders');
Route::post('sell/completed/orders/{itemid}', 'ShopController@onprogress')->name('onprogress');
Route::get('seller/transactions/', 'ShopController@transaction')->name('transaction');
Route::get('seller/completed/orders', 'ShopController@completed')->name('completed');
Route::post('order/update/{itemid}', 'ShopController@updateo')->name('order.update');
Route::post('auth/seller', 'ShopController@authenticate')->name('authenticate');
Route::post('home', 'ShopController@logout')->name('slogout');
Route::post('registers', 'ShopController@storeUser')->name('storeuser');
Route::resource('shop', 'Shop');
Route::resource('pay', 'paymentController');

//admin routes

Route::get('admin/dashboard', 'AdminController@index')->name('adashboard');
Route::get('admin/dashboard/all/orders', 'AdminController@getAllorders')->name('allorders');
Route::get('admin/dashboard/all/products', 'AdminController@allproducts')->name('allproducts');
Route::get('admin/dashboard/all/shops', 'AdminController@shops')->name('shops');
Route::get('admin/dashboard/all/getAllProducts', 'AdminController@getAllProducts');
Route::post('admin/login','AdminController@adminlogin')->name('adminauthenticate');
Route::get('admin/register','AdminController@adminregister')->name('adminregister');
Route::post('admin/auth','AdminController@adminauthenticate')->name('adminauth');
Route::get('admin/auth','AdminController@adminlogin')->name('adminauthh');
Route::post('admin/store','AdminController@adminstore')->name('adminstore');
Route::get('dashboard/admin','AdminController@admin')->name('admin');
Route::get('admin/daily/orders','AdminController@daily_orders')->name('daily');
Route::post('admin/daily/deliver/{orderid}','AdminController@deliver')->name('deliver');
//payments
Route::get('payment', 'MpesaController@payment')->name('payment');
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
Route::get('allgrocery/{slug}','Supermarket@allgrocery')->name('allgrocery');
//Drinks
Route::get('Drinks','supermarket@Drinks')->name('Drinks');
Route::get('beers','supermarket@beers')->name('beers');
Route::get('carbonated','Supermarket@carbonated')->name('carbonated');
Route::get('water','Supermarket@water')->name('water');
//food capboard
Route::get('Food','Supermarket@Food')->name('Food');
Route::get('cerials','Supermarket@cerials')->name('cerials');
Route::get('cookingingriedients','supermarket@cookingingriedients')->name('cookingingriedients');
Route::get('snacks','Supermarket@snacks')->name('snacks');
//households
Route::get('Households','Supermarket@Households')->name('Households');
Route::get('bathroomcleaner','Supermarket@bathroomcleaner')->name('bathroomcleaner');
Route::get('bulbbatteries','Supermarket@bulbbatteries')->name('bulbbatteries');
Route::get('freshners','Supermarket@freshners')->name('freshners');

//Fashion
Route::get('Fashion','Fashion@Fashion')->name('Fashion');
//Baby
Route::get('baby','Fashion@baby')->name('baby');
Route::get('BabyBoy','Fashion@BabyBoy')->name('BabyBoy');
Route::get('BabyGirl','Fashion@BabyGirl')->name('BabyGirl');
//Kid`s Fashion
Route::get('kids','Fashion@kids')->name('kids');
Route::get('Boys','Fashion@Boys')->name('Boys');
Route::get('Girls','Fashion@Girls')->name('Girls');
//Men`s Fashion
Route::get('mens','Fashion@mens')->name('mens');
Route::get('Pants','Fashion@Pants')->name('Pants');
Route::get('Short','Fashion@Short')->name('Short');
Route::get('Shirt','Fashion@Shirt')->name('Shirt');
//Women`s Fashion
Route::get('women','Fashion@women')->name('women');
Route::get('Dress','Fashion@Dress')->name('Dress');
Route::get('Jeans','Fashion@Jeans')->name('Jeans');
Route::get('Skirt','Fashion@Skirt')->name('Skirt');


