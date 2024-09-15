<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class PromoController extends Controller
{

    public function index()
    {
        $menu = Menu::all();
        $data['menu'] = [$menu];
        return view('static.index')->with($data);
        // return view('static/index')->with('menu', $menu);
    }
}
