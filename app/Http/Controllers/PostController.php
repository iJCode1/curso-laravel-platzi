<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    public function index(){
      return view('posts.index', ['posts' => Post::latest('id')->paginate()]);
    }

    public function create(Post $post){
      return view('posts.create', ['post' => $post]);
    }

    public function store(Request $request){
      $request->validate([
        'title' => 'required',
        'slug' => ['required', Rule::unique('posts', 'slug')],
        'body' => 'required',
      ]);
      $post = new Post;
      $post->title = $request->title;
      $post->slug = $request->slug;
      $post->body = $request->body;
      $post->user_id = $request->user()->id;
      $post->save();

      return redirect()->route('posts');
    }

    public function edit(Post $post){
      return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $request, Post $post){
      $request->validate([
        'title' => 'required',
        'slug' => ['required', Rule::unique('posts', 'slug')->ignore($post->id)],
        'body' => 'required',
      ]);
      $post->title =$request->title;
      $post->slug = $request->slug;
      $post->body = $request->body;
      $post->update();

      return redirect()->route('posts');
    }

    public function destroy(Post $post){
      $post->delete();
      return back();
    }
}
