<?php

use Illuminate\Support\Facades\Route;

Route:: get('/','EventsController@index');
Route:: get('/events/{event}','EventsController@show');
Route:: get('/events/create','EventsController@create');
//GET /events/create display the create from
//GET /events/{event}/update the update form
//POST /events store a record
//POST /events/{event} update a record
//DELETE/ events/{event} delete a record
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