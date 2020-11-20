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
Route::get('/products/create', 'ProductsController@create');
//show
Route::get('/products/{product}', 'ProductsController@show');
//store
Route::post('/products', 'ProductsController@store');
//edit
Route::get('/products/{product}/edit', 'ProductsController@edit');
//update
Route::put('products/{product}', 'ProductsController@update');
//delete screen
Route::get('products/{product}/delete', 'ProductsController@delete');
//delete
Route::delete('products/{product}', 'ProductsController@destroy');

/** Product Types */
//index
Route::get('/product-types', 'ProductTypesController@index');
//create
Route::get('/product-types/create', 'ProductTypesController@create');
//show
Route::get('/product-types/{productType}', 'ProductTypesController@show');
//store
Route::post('/product-types', 'ProductTypesController@store');
//edit
Route::get('/product-types/{productType}/edit', 'ProductTypesController@edit');
//update
Route::put('product-types/{productType}', 'ProductTypesController@update');
//delete screen
Route::get('product-types/{productType}/delete', 'ProductTypesController@delete');
//delete
Route::delete('product-types/{productType}', 'ProductTypesController@destroy');


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
Route::get('/payment-types','PaymentTypesController@index');
//create
Route::get('/payment-types/create','PaymentTypesController@create');
//show
Route::get('/payment-types/{paymentType}','PaymentTypesController@show');
//store
Route::post('/payment-types','PaymentTypesController@store');
//edit
Route::get('/payment-types/{paymentType}/edit','PaymentTypesController@edit');
//update	
Route::put('/payment-types/{paymentType}','PaymentTypesController@update');
// Display deletion screen
Route::get('payment-types/{paymentType}/delete', 'PaymentTypesController@delete');
//delete
Route::delete('/payment-types/{paymentType}','PaymentTypesController@destroy');


/** Orders */
Route::get('/orders', 'OrdersController@index');
Route::get('/orders/create', 'OrdersController@create');
Route::get('/orders/{order}', 'OrdersController@show');
Route::get('/orders/{order}/edit', 'OrdersController@edit');
Route::post('/orders', 'OrdersController@store');
Route::put('/orders/{order}', 'OrdersController@update');
Route::get('/orders/{order}/delete', 'OrdersController@delete');
Route::delete('/orders/{order}', 'OrdersController@destroy');