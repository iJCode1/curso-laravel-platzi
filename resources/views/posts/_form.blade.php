Formulario

@csrf
<label class="d-block">Titulo
  <input class="form-control" name="title" type="text" value="{{ old('title', $post->title) }}" placeholder="El estado actual de JS" />
  <span class="text-danger">@error('title') {{ $message }} @enderror</span>
</label>
<label class="d-block">Slug
  <input class="form-control" type="text" name="slug" value="{{old('slug', $post->slug)}}" placeholder="js-esencial"/>
  <span class="text-danger">@error('slug') {{ $message }} @enderror</span>
</label>
<label class="d-block">Contenido
  <textarea class="form-control" name="body" rows="5" placeholder="Javascript en la actualidad es uno de los lenguajes mejor ...">{{ old('body', $post->body) }}</textarea>
  <span class="text-danger">@error('body') {{ $message }} @enderror</span>
</label class="d-block">
<div class="d-flex align-items-center justify-content-between">
  <a href="{{ route('posts') }}" class="btn btn-info">Regresar</a>
  <input class="btn btn-success" type="submit" value="Enviar">
</div>
