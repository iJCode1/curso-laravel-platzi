<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>iJCode - @yield('title')</title>
  
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <div class="container mx-auto">
    <nav class="navbar d-flex justify-between align-items-center">
      <ul class="navbar-nav d-flex flex-row align-items-center">
        <li class="nav-item">
          <a href="{{route('home')}}" class="nav-link">
            <img src="{{asset('images/logo.png')}}" alt="Ir al Home" width="60">
          </a>
        </li>
        <li class="nav-item ml-4">
          <input class="form-control" type="search" placeholder="Buscar"/>
        </li>
      </ul>
      <ul class="navbar-nav">
        @guest
        <li class="nav-item">
            <a class="nav-link text-dark text-uppercase" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @endguest
      </ul>
    </nav>
    <p style="height: 2px; background: linear-gradient(to right, 
    rgba(200, 200, 200, 0) 0%,
    rgba(200, 200, 200, 1) 30%,
    rgba(200, 200, 200, 1) 70%,
    rgba(200, 200, 200, 0) 100%
    );"></p>

    @yield('content')

  </div>
</body>
</html>