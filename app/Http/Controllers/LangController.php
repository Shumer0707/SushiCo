<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LangController extends Controller
{
    public function index($lang){

    
    App::setLocale($lang);
    Session::put('locale', $lang);
    $locale = App::currentLocale();

    return response()->json(['success' => $locale]);
    }
}
