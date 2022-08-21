<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index(){
      return view('posts.index', ['posts' => Post::latest()->paginate()]);
    }

    public function create(Post $post){
      return view('posts.create', ['post' => $post]);
    }

    public function store(Request $request){
      $post = new Post;
      $post->title = $title = $request->title;
      $post->slug = Str::slug($title);
      $post->body = $request->body;
      $post->user_id = $request->user()->id;
      $post->save();

      return redirect()->route('editPost', $post);
    }

    public function edit(Post $post){
      return view('posts.edit', ['post' => $post]);
    }

    public function destroy(Post $post){
      $post->delete();
      return back();
    }
}
