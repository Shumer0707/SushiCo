<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', 'StaticController@index');

Route::resource('/', 'MenuController');

//Route::get('/home', function () {return view('static/home');});
//Route::get('/post/{id}', function ($id) {return "ID: $id";});


