<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function index()
    {
        session_destroy();
        return redirect('/');
    }
}
