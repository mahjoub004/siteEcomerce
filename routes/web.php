<?php


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
//Main page 

use Illuminate\Support\Facades\Redirect;

Route::get('/','HomeController@home')->name('home');
Route::get('/contact','HomeController@contact')->name('contact');

//Shop
Route::get('/shop','ShopController@index')->name('shop.index');
Route::get('/shop/{product}','ShopController@show')->name('shop.show');

 // Cart
 Route::get('/cart','CartController@index')->name('cart.index');
 Route::post('/cart','CartController@store')->name('cart.store');
 Route::get('/cart/reset','CartController@reset')->name('cart.reset');
 Route::delete('/cart/{product}','CartController@destroy')->name('cart.destroy');
 Route::post('/cart/{product}/save','CartController@save')->name('cart.save');

//save
Route::delete('/save/{product}','SaveController@destroy')->name('save.destroy');
Route::post('/save/{product}/cart','SaveController@store')->name('save.store');

 //checkout
 Route::get('/checkout','HomeController@checkout')->name('checkout.index');
 Route::get('/checkout/success','HomeController@success')->name('checkout.success');

 //Orders
 Route::get('/orders','HomeController@orders')->name('orders');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
//authentication
Auth::routes();

Route::get('/logout', function () {
    auth()->logout();
    session()->flush();
    return Redirect::to('/');

})->name('logout');