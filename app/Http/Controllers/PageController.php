<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PageController extends Controller
{
  public function home(Request $request){
    $search = $request->search;
    // dd($search);
    $posts = Post::where('title', 'LIKE', "%{$search}%")->latest('id')->paginate();
    return view('home', ['posts' => $posts]);
  }

  public function blog(){
    /*$posts = [
      ['id' => 1, 'title' => 'PHP', 'slug' => 'php'],
      ['id' => 2, 'title' => 'Laravel', 'slug' => 'laravel'],
      ['id' => 3, 'title' => 'Javascript', 'slug' => 'js']
    ];
    return view('blog', ['posts' => $posts]);*/

    // Consulta con la BD
    $posts = Post::get(); // Obtener todos los registros
    $post = Post::first(); // Obtener el primer registro
    $postId = Post::find(7); // Buscar por id
    $posts2 = Post::latest('id')->paginate(); // Páginar los registros
    
    return view('blog', ['posts' => $posts2]);
  }

  public function post(Post $post){
    return view('post', ['post' => $post]);
  }
}
