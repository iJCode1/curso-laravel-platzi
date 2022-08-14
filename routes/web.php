<?php

use Illuminate\Http\Request;
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

/**
 * Route::get    | Consultar
 * Route::post   | Guardar
 * Route::delete | Eliminar
 * Route::put    | Actualizar
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/buscar', function(){
    return "Haciendo una busqueda";
});
// http://localhost:8000/buscar

Route::get('/buscar/{param}', function($param){
    return $param;
});
// http://localhost:8000/buscar/heeey

Route::get('/buscar2', function(Request $request){
    return $request->all();
});
// http://localhost:8000/buscar2/?query=algo