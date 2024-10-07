<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index(){
        if (!isset($_SESSION)) {
            $_SESSION['visitor_count'] = 0;
        } else {
            $_SESSION['visitor_count']++;
        }
         $data= ['visitor'=>$_SESSION['visitor_count'],'id' => session_id()];
        return view('static/index');
    }
}
