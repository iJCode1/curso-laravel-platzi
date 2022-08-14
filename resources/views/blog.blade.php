@extends('template')

  @section('title', 'Blog')

  @section('content')
  
    <h2>Página de Blog 📚</h2>

    @foreach($posts as $post)
      <p>
        <a href="{{ route('post', $post['title']) }}">{{ $post['title'] }}</a>
      </p>
    @endforeach

  @endsection
