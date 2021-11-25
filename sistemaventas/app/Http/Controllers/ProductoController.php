<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Producto;
class ProductoController extends Controller
{
    //
    public function list() 
    {
        $products = Producto::all();
        //$products = \DB::table('productos')->get();
        return view('producto', ['prods' => $products]);
    }
    public function filter($id) 
    {
        $products = Producto::where('id', $id)->get();
        //$products = \DB::table('productos')->get();
        return view('producto-detalle', ['prods' => $products]);
    }
}
