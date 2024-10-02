<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{

    public function index($category='')
    {
        $menu=DB::table('menus')->where('category', $category)->get();
        return view('static.menu')->with('menu',$menu)->with('category',$category);
    }

    public function show($id){
        $menu = Menu::where('id', $id)->get();
        return view('static.show')->with('menu',$menu);
    }
}
