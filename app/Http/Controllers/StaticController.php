<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index(){
        $data = ['title' => 'Главная страница!', 'params' => ['bmw','audi']];
        return view('static/index')->with($data);
//        Если переменная
//        $title = 'Главная страница';
//        return view('static/index')->with('header', $title);
//        return view('static/index', compact('title'));
    }
}
