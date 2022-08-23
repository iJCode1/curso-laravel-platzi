@extends('template')

  @section('title', 'post')

  @section('content')

  <div class="w-75 mx-auto">
    <h3 class="font-weight-bold" style="font-size: 2.7rem">{{ $post->title }}</h3>
    <p class="" style="font-size: 2rem">{{ $post->body }}</p>
  </div>

  @endsection
