<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $titulo = "Home web";
        return view('sistema.index', compact('titulo'));
    }
    //
}
