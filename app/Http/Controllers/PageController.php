<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  public function home(){
    return view('home');
  }

  public function blog(){
    $posts = [
      ['id' => 1, 'title' => 'PHP', 'slug' => 'php'],
      ['id' => 2, 'title' => 'Laravel', 'slug' => 'laravel'],
      ['id' => 3, 'title' => 'Javascript', 'slug' => 'js']
    ];
    return view('blog', ['posts' => $posts]);
  }

  public function post($slug){
    $post = $slug;
    return view('post', ['post' => $post]);
  }
}
