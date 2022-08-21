Formulario

@csrf
<label class="d-block">Titulo
  <input class="form-control" name="title" type="text" value="{{ $post->title }}" placeholder="El estado actual de JS" />
</label>
<label class="d-block">Contenido
  <textarea class="form-control" name="body" rows="5" placeholder="Javascript en la actualidad es uno de los lenguajes mejor ...">{{ $post->body }}</textarea>
</label class="d-block">
<div class="d-flex align-items-center justify-content-between">
  <a href="{{ route('posts') }}" class="btn btn-info">Regresar</a>
  <input class="btn btn-success" type="submit" value="Enviar">
</div>
