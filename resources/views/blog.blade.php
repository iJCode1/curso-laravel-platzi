@extends('template')

  @section('title', 'Blog')

  @section('content')
  
    <h2>Página de Blog 📚</h2>
    
    {{-- @dd($posts); --}}
    @foreach($posts as $post)
    <div class="post">
      <strong>{{ $post->id }}</strong>
        <a href="{{ route('post', $post->slug) }}"> {{ $post->title }} </a>
    </div>
    @endforeach

    {{-- Paginación --}}
    {{ $posts->links() }}

  @endsection
