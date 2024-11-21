<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class PromoController extends Controller
{

    public function index(Request $request)
    {
        $menu = Menu::all();
        $data['menu'] = $menu;
        $data['menu_category'] = Menu::pluck('category')->unique();
        // dd($data);
        return view('static.index')->with($data);
    }
}
