<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', 'StaticController@index');

Route::resource('/', 'PromoController');

Route::get('/menu', 'MenuController@index');
Route::get('/menu/{id}', 'MenuController@edit');

Route::resource('/contact', 'ContactController');

Route::resource('/basket', 'BasketController');


//Route::get('/home', function () {return view('static/home');});
//Route::get('/post/{id}', function ($id) {return "ID: $id";});


Route::get('/delete', 'DeleteController@index');


