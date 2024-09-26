<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LangController extends Controller
{
    public function index($lang){

    // Session::put('locale', $lang);
    App::setLocale($lang);
    $locale = App::currentLocale();

    return response()->json(['success' => $locale]);
    }
}
