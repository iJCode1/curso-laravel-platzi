<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>iJCode - @yield('title')</title>
</head>
<body>
  
  <nav class="nav">
    <ul class="nav-list">
      <li class="nav-element">
        <a href="{{ route('home') }}" class="nav-link">Home</a>
      </li>
      <li class="nav-element">
        <a href="{{ route('blog') }}" class="nav-link">Blog</a>
      </li>
    </ul>
  </nav>

  @yield('content')

</body>
</html>