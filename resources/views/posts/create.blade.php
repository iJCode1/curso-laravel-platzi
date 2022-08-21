@extends('../layouts.app');

@section('content')

<div class="container">
  <h2>Crear un nuevo Post</h2>
  <form action="{{ route('store') }}" method="POST">
    @csrf

    @include('posts._form')
  </form>
</div>

@endsection