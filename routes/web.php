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

/*Route::get('/buscar2', function(Request $request){
    return $request->all();
});*/
// http://localhost:8000/buscar2/?query=algo

/**
 * Route::get    | Consultar
 * Route::post   | Guardar
 * Route::delete | Eliminar
 * Route::put    | Actualizar
 */

Route::get('/', function () {
    return view('home');
});

Route::get('/blog', function(){
    // Consulta con la BD
    $posts = [
        ['id' => 1, 'title' => 'PHP', 'slug' => 'php'],
        ['id' => 2, 'title' => 'Laravel', 'slug' => 'laravel']
    ];
    return view('blog', ['posts' => $posts]);
});
// http://localhost:8000/blog

Route::get('/post/{slug}', function($slug){
    // Consulta con la BD
    $post = $slug;

    return view('post', ['post' => $post]);
});
// http://localhost:8000/post/PHP
