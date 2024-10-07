<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class PromoController extends Controller
{

    public function index(Request $request)
    {
        // dd($request->jora);
        // dd($request->model->where('id', 1));
        $menu = $request->model;
        $data['menu'] = [$menu];
        return view('static.index')->with($data);
        // return view('static/index')->with('menu', $menu);
    }
}
