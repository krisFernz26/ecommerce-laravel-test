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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/shop', function(){
    return view('shop.index');
});

Route::get('/sign-in', function (){
    return view('sign_in.index');
});

Route::get('/profile', function(){
    return view('profile.index');
});


Route::get('/orders', function(){
    return view('order.index');
});

//index
Route::get('/products', 'ProductsController@index');

//create
Route::post('/products/create', 'ProductsController@create');

//show
Route::get('/products/{product}', 'ProductsController@show');

//store
Route::post('/products', 'ProductsController@store');

//edit
Route::get('/products/{product}/edit', 'ProductsControlle@edit');

//update
Route::put('products/{product}', 'ProductsController@update');

//delete
Route::get('products/{product}/delete', 'ProductsController@delete');