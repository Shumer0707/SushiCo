<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class BasketController extends Controller
{
    public function index()
    {
//        $j = [3,4,5];
//        $basket = DB::table('menus')->whereIn('id', $j)->get();

        return view('/basket/basket')->with('basket',$this->AddToBasket());
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {

    }
    public function edit($id)
    {
        $_SESSION['prod'][$id] = ['id'=>$id];
        $_SESSION['count'][$id] = ['count'=>1];
        return redirect('/');
    }
    public function AddToBasket(){
        if (isset($_SESSION['prod'])) {
            $basket=DB::table('menus')->whereIn('id', $_SESSION['prod'])->get();
            $collectionB = collect([]);
            $concat = $collectionB -> concat([$basket[0], 'jora']);
            $res = $concat -> all();
            return $res;
        }
    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }

}
