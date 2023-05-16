<div class="form-group">
    <label for="titulo">Título</label>
    <input type="text" class="form-control" id="titulo" name="titulo" value="{{ isset($libro) ? $libro->titulo : old('titulo') }}">
</div>

<div class="form-group">
    <label for="autor">Autor</label>
    <input type="text" class="form-control" id="autor" name="autor" value="{{ isset($libro) ? $libro->autor : old('autor') }}">
</div>

<div class="form-group">
    <label for="anio_publicacion">Año de Publicación</label>
    <input type="text" class="form-control" id="anio_publicacion" name="anio_publicacion" value="{{ isset($libro) ? $libro->anio_publicacion : old('anio_publicacion') }}">
</div>

<button type="submit" class="btn btn-primary">{{ isset($libro) ? 'Guardar' : 'Crear' }}</button>
