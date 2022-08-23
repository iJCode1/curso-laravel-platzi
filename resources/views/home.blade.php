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
<div class="bg-dark rounded p-5 position-relative overflow-hidden">
  <span class="px-2 p-2 badge badge-pill badge-secondary text-uppercase">Programación</span>
  <h3 class="px-2 pt-4 text-white">Blog</h3>
  <p class="px-2 text-white">Proyecto de desarrollo web para profesionales</p>
  <img style="right: 20px; bottom: 20px; opacity: 0.4;" class="position-absolute" src="{{asset('images/dev.png')}}" alt="Dev" width="280">
</div>
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
