<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
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

/**
 * Forma 1 de crear rutas - Creando un grupo de rutas de un controlador
 * Laravel 9
 */
/*
Route::controller(PageController::class)->group(function(){
  Route::get('/', 'home')->name('home');
  Route::get('/blog', 'blog')->name('blog');
  Route::get('/post/{slug}', 'post')->name('post');
});
*/

/**
 * Forma 2 de crear rutas llamando a un controlador
 */
Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/blog', [PageController::class, 'blog'])->name('blog');
// http://localhost:8000/blog

Route::get('/post/{post:slug}', [PageController::class, 'post'])->name('post');
// http://localhost:8000/post/PHP

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('posts', [PostController::class, 'index'])->name('posts');