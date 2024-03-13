<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PromoController@index')->name('promo.index');

Route::get('/menu/{category}', 'MenuController@index');
Route::get('/menu/show/{id}', 'MenuController@show');

Route::get('/contact', 'ContactController@index')->name('contact.index');

Route::get('/basket', 'BasketController@index')->name('basket.index');
Route::post('/basket/store', 'BasketController@store')->name('basket.store');

//Route::get('/home', function () {return view('static/home');});
//Route::get('/post/{id}', function ($id) {return "ID: $id";});

Route::get('/delete', 'DeleteController@index');


