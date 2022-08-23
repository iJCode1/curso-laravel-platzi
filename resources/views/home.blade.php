@extends('template')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
{{-- {{dd($posts[0])}} --}}
<h2 class="mt-4">Contenido técnico</h2>

<div>
  @foreach ($posts as $post)
    <div class="bg-secondary px-4 py-3 mb-3 rounded">
      <div class="post_type d-flex flex-row align-items-center">
        <span class="p-1 badge badge-pill badge-dark">Tutorial</span>
        <p class="my-0 mx-2 text-white">{{$post->created_at->format('d/m/y')}}</p>
      </div>
      <div class="post_body d-flex">
        <h5 class="mt-2 text-white">{{$post->title}}</h5>
      </div>
    </div>
  @endforeach
  {{ $posts->links() }}
</div>

@endsection
