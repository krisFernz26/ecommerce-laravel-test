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


// Display all Users
Route::get('/users', 'UsersController@index');
// Display Create User form
Route::get('/users/create', 'UsersController@create');
// Display User
Route::get('/users/{user}', 'UsersController@show');
// Display Update User form
Route::get('/users/{user}/edit', 'UsersController@edit');
// Store a record of user
Route::post('/users', 'UsersController@store');
// Update a user record
Route::put('/users/{user}', 'UsersController@update');
// Display deletion screen
Route::get('users/{user}/delete', 'UsersController@delete');
// Delete a user record
Route::delete('/users/{user}', 'UsersController@destroy');

// Display all User Types
Route::get('/user-types', 'UserTypesController@index');
// Display Create User Type form
Route::get('/user-types/create', 'UserTypesController@create');
// Display User Type
Route::get('/user-types/{userType}', 'UserTypesController@show');
// Display Update User Type form
Route::get('/user-types/{userType}/edit', 'UserTypesController@edit');
// Store a record of user type
Route::post('/user-types', 'UserTypesController@store');
// Update a user type record
Route::put('/user-types/{userType}', 'UserTypesController@update');
// Display deletion screen
Route::get('user-types/{userType}/delete', 'UserTypesController@delete');
// Delete a user type record
Route::delete('/user-types/{userType}', 'UserTypesController@destroy');


Route::get('/profile', function(){
    return view('profile.index');
});


Route::get('/orders', function(){
    return view('order.index');
});

//Display all Payments
Route::get('/payments', 'PaymentsController@index');
//Create payment form
Route::get('/payments/create', 'PaymentsController@create');
//Show - Display
Route::get('/payments/{payment}', 'PaymentsController@show');
//Store
Route::post('/payments', 'PaymentsController@store');
//Edit
Route::get('/payments/{payment}/edit','PaymentsController@edit');
// Update
Route::put('/payments/{payment}', 'PaymentsController@update');
// Display deletion screen
Route::get('payments/{payment}/delete', 'PaymentsController@delete');
// Delete a payment record
Route::delete('/payments/{payment}', 'PaymentsController@destroy');