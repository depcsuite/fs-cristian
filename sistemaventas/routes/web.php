<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/productos',function(){ return true;});
Route::get('/home/{name}', [App\Http\Controllers\HomeController::class,'index']);
Route::get('/productos', [App\Http\Controllers\ProductoController::class,'list']);
Route::get('/productos/{id}', [App\Http\Controllers\ProductoController::class,'filter']);
Route::get('/', function () {
    return view('welcome');
});
