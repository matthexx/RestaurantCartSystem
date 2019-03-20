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

// Route::get('/', function () {
//     return view('index');
// });


Route::get('/', 'PagesController@getindex');
Route::get('pages/reservation', 'PagesController@getReservation');
Route::get('pages/about', 'PagesController@getAbout');
Route::get('pages/contact', 'PagesController@getContact');

Route::get('/add-to-cart/{id}', [
    'uses' => 'ProductsController@getAddToCart',
    'as' => 'product.addToCart'
]);

Route::get('/reduce/{id}', [
    'uses' => 'ProductsController@getReduceByOne',
    'as' => 'product.reduceByOne'
]);

Route::get('/remove/{id}', [
    'uses' => 'ProductsController@getRemoveItem',
    'as' => 'product.remove'
]);


Route::get('shop/menu', [
    'uses' => 'ProductsController@getMenu',
    'as' => 'product.menu'
]);

Route::get('shop/cart', [
    'uses' => 'ProductsController@getCart',
    'as' => 'product.cart'
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
