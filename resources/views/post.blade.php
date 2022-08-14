@extends('template')

  @section('title', 'post')

  @section('content')

    <h2>Página de Post 📖</h2>
    <h3>Detalle del Post:</h3>
    <p>Titulo: {{ $post }}</p>

  @endsection
