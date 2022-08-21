@extends('../layouts.app')

@section('content')

<div class="container">
  <h2>Editar el Post</h2>
  <form action="{{ route('updatePost', $post) }}" method="POST">
    
    @method('put')
    @include('posts._form')

  </form>
</div>

@endsection