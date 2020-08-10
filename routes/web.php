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

// Route::get('/', function () {
//     return view('frontend.index');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/',function(){
        return view('admin.index');
    });
    Route::resource('/terms', 'Admin\\TermsController');
    Route::resource('/contact', 'Admin\\ContactController');
    Route::resource('/privacy', 'Admin\\PrivacyController');
    Route::resource('/refund', 'Admin\\RefundController');
    Route::resource('/faq', 'Admin\\FaqController');
    Route::resource('/outlet', 'Admin\\OutletController');
    Route::get('/complain', 'Admin\\ComplainController@index')->name('complain.index');
    Route::delete('/complain/{complain}', 'Admin\\ComplainController@destroy')->name('complain.destroy');
    Route::resource('/category', 'Admin\\CategoryController');
    Route::resource('/carousel', 'Admin\\CarouselController');
    Route::resource('/product', 'Admin\\ProductController');
    Route::resource('/recentorder', 'Admin\\RecentorderController');
    
    // RecentOrder => ganti status
    // Route::put('/order/{id}', 'RecentorderController@update');
});

Route::get('/','FrontendController@index')->name('front.index');
Route::get('/terms','FrontendController@terms')->name('front.terms');
Route::get('/privacy','FrontendController@privacy')->name('front.privacy');
Route::get('/refund','FrontendController@refund')->name('front.refund');
Route::get('/faq','FrontendController@privacy')->name('front.faq');
// Route::post('contact','admin\\ComplainController@store')->name('complain.store');
Route::get('/contact','FrontendController@complain')->name('front.complain.index');
Route::post('/complain','Admin\\ComplainController@store')->name('complain.store');
Route::get('/outlets','FrontendController@outlet')->name('front.outlet');
Route::get('/store','FrontendController@shop')->name('front.store');
Route::get('/store/detail/{id}','FrontendController@showproduct')->name('front.detail');
// Route::get('/cart','CheckoutController@index')-name('cart.index');

// Cart
Route::get('/cart', 'CartController@index');
Route::post('/cart', 'CartController@store');
Route::patch('/cart/{id}', 'CartController@update');

// Checkout
Route::post('/checkout', 'CheckoutController@store');
