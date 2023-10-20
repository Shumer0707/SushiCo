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
        return view('dynamic/menu')->with('menu',$menu)->with('category',$category);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $menu=DB::table('menus')->where('id', $id)->get();
        return view('dynamic/show')->with('menu',$menu);
    }


    public function edit($id)
    {
//        $category = ['Акция'];
//        $menu=DB::table('menus')->whereIn('category', $category)->get();
//        return redirect('/menu')->with($menu);
//        return $menu;
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
