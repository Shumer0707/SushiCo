<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/','PromoController@index')->name('promo.index');

Route::get('/menu/{category}', 'MenuController@index')->name('menu.index');
Route::get('/menu/show/{id}', 'MenuController@show')->name('menu.show');

Route::get('/contact', 'ContactController@index')->name('contact.index');

Route::get('/basket', 'BasketController@index')->name('basket.index');
Route::get('/basket/{id}', 'BasketController@add_to_basket')->name('basket.add_to_basket');
Route::get('/test', 'BasketController@test')->name('basket.test');

Route::get('/fetch_data/{val}/{name}/{id}', 'BasketController@fetch_data');
Route::get('/fetch_vieu/{val}/{id}', 'BasketController@fetch_vieu');

Route::post('/form_basket', 'FormBasketController@index');

Route::get('/fetch_lang/{lang}', 'LangController@index')->name('lang.index');

Route::get('/delete', 'DeleteController@index')->name('delete.index');
Route::get('/sesion', 'DeleteController@sesion');
Route::get('/1', 'DeleteController@sesion');


Auth::routes();
Auth::routes(['register' => false]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/product', 'ProductController@index')->name('product.index');
    Route::get('/product/form_add_product', 'ProductController@form_add_product')->name('product.form_add_product');
    Route::post('/product/add_product', 'ProductController@add_product')->name('product.add_product');
    Route::post('/product/add_ingr', 'ProductController@add_ingr')->name('product.add_ingr');
    Route::get('/product/form_update_ingr', 'ProductController@form_update_ingr')->name('product.form_update_ingr');
    Route::get('/product/delete_ingr/{id}', 'ProductController@delete_ingr')->name('product.delete_ingr');
    Route::get('/product/form_update_product/{id}', 'ProductController@form_update_product')->name('product.form_update_product');
    Route::post('/product/update_product', 'ProductController@update_product')->name('product.update_product');
    Route::get('/product/delete_product/{id}', 'ProductController@delete_product')->name('product.delete_product');
});