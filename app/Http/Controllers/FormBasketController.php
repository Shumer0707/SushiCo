<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormBasketRequest;
use Illuminate\Http\Request;

class FormBasketController extends Controller
{
    public function index(FormBasketRequest $request){
        // $data = $request->validate([
        //     'test' => 'string',
        // ]);
        $data = $request->validated();
        // dd($data);
        return $data;
    }
}
