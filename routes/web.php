<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/','PromoController@index')->name('promo.index');

Route::get('/menu/{category}', 'MenuController@index')->name('menu.index');
Route::get('/menu/show/{id}', 'MenuController@show')->name('menu.show');

Route::get('/contact', 'ContactController@index')->name('contact.index');

Route::get('/basket', 'BasketController@index')->name('basket.index');
Route::get('/basket/{id}', 'BasketController@add_to_basket')->name('basket.add_to_basket');
Route::get('/test', 'BasketController@test')->name('basket.test');

// Route::post('/fetch_post', 'BasketController@fetch_post');
Route::get('/fetch_data/{val}/{name}/{id}', 'BasketController@fetch_data');
Route::get('/fetch_vieu/{val}/{id}', 'BasketController@fetch_vieu');

Route::post('/form_basket', 'FormBasketController@index');

Route::get('/delete', 'DeleteController@index');
Route::get('/sesion', 'DeleteController@sesion');



