<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function index()
    {
//        $data = [];
//        if (!isset($_SESSION)) {
//            $razreshenniye_simvoli = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
//            $_SESSION['visitor']="substr(str_shuffle($razreshenniye_simvoli), 0, 15)";
//
//        }
//        $data=[
//            'visitor' => $_SESSION['visitor'],
//            'product'=> ['id'=>'aaa', 'count' => 1]
//        ];
        return view('/basket/basket');
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
        $_SESSION['prod'][$id]=['id'=>$id,'count'=>1];
        return redirect('/');
    }

    public function update(Request $request, $id)
    {
        return view('static/index');
    }

    public function destroy($id)
    {

    }
    public function delete()
    {
         session_destroy();
         return redirect('/');
    }
}
