<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/shop', function(){
    return view('shop.index');
});

/** Users */
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

/** User Types */
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

/** Posts */
// Display all Posts
Route::get('/posts', 'PostsController@index');
// Display Create Post form
Route::get('/posts/create', 'PostsController@create');
// Display Post
Route::get('/posts/{post}', 'PostsController@show');
// Display Update Post form
Route::get('/posts/{post}/edit', 'PostsController@edit');
// Store a record of post
Route::post('/posts', 'PostsController@store');
// Update a post record
Route::put('/posts/{post}', 'PostsController@update');
// Display deletion screen
Route::get('posts/{post}/delete', 'PostsController@delete');
// Delete a post record
Route::delete('/posts/{post}', 'PostsController@destroy');

/** Products */
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

/** Payments */
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

/** Payment Types */
//index
Route::get('/payments','PaymentsController@index');
//create
Route::post('/payments/create','PaymentsController@create');
//show
Route::get('/payments/{payment}','PaymentsController@show');
//store
Route::post('/payments/create','PaymentsController@store');
//edit
Route::get('/payments/{payment}/edit','PaymentsController@edit');
//update	
Route::put('/payments/{payment}','PaymentsController@update');
//delete
Route::get('/payments/{payment}/delete','PaymentsController@delete');


/** Orders */