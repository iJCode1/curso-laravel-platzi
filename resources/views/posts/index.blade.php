@extends('../layouts.app')

@section('title', 'Posts') 

@section('content')
  <div class="container">
    <div class="d-flex align-items-center justify-content-between mb-4">
      <h2 class="display-4">Listado de publicaciones</h2>
      <a class="btn btn-primary h-auto" href="{{ route('createPost') }}">Crear un nuevo Post</a>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Post</th>
          <th scope="col">Editar</th>
          <th scope="col">Eliminar</th>
        </tr>
      </thead>
      <tbody>
        @forelse($posts as $post)   
          <tr>
            <th scope="row">{{ $post->id }}</th>
            <td>{{ $post->title }}</td>
            <td>
              <a class="btn btn-warning" href="{{ route('editPost', $post) }}">Editar</a>
            </td>
            <td>
              <form method="Post" action="{{ route('destroy', $post) }}">
                @csrf
                @method('DELETE')

                <input class="btn btn-danger" type="submit" value="Eliminar" onclick="return confirm('¿Deseas eliminar?')">
              </form>
            </td>
          </tr>
          @empty
          <tr class="">
            Upps! no hay ninguna publicacion disponible
          </tr>
        @endforelse
      </tbody>
    </table>
    {{ $posts->links() }}
  </div>
@endsection