<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormBasketRequest;
use App\Mail\OrderMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormBasketController extends Controller
{
    public function index(FormBasketRequest $request){
        $data = $request->validated();
        $arr = ["Validate" => 'true'];
        Mail::to('shumer0707@mail.ru')->send(new OrderMail($data));
        
        return $arr;
    }
}
