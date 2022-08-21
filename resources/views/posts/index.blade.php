@extends('../layouts.app')

@section('title', 'Posts') 

@section('content')
  <div class="container">
    <h2 class="display-4 mb-4">Listado de publicaciones</h2>
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
              <a href="#">Editar</a>
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