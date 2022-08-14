<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>iJCode - Blog</title>
</head>
<body>
  <h2>Página de Blog 📚</h2>

  @foreach($posts as $post)
    <p>
      <a href="#">{{ $post['title'] }}</a>
    </p>
  @endforeach
</body>
</html>