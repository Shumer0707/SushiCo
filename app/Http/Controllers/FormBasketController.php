<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormBasketRequest;
use App\Mail\OrderMail;
// use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormBasketController extends Controller
{
    public function index(FormBasketRequest $request){
        $data = $request->validated();
        // $items = $this->getItems();
        // $arr = 1;
        // $arr = ["Validate" => 'true'];
        // Mail::to('shumer0707@mail.ru')->send(new OrderMail($data, $items));
        // return redirect(view('/1')->with('data', $data));
        // json_decode($data);
        return $data;
    }

    // public function getItems(){
    //     foreach ($_SESSION['prod'] as $key => $value) {
    //         $items[] = [
    //         'title' => Menu::where('id',$key)->select('title')->get()->toArray()[0]['title'],
    //         'price' => Menu::where('id',$key)->select('price')->get()->toArray()[0]['price'],
    //         'count' => $value,
    //         'all_price' => Menu::where('id', $key)->select('price')->get()->toArray()[0]['price']*$value
    //         ];
    //         $items = collect($items);
    //     };
    //     return $items;
    // }
}
