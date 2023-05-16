@extends ('plantilla')

@section('content')
    <div class="container">
        <h1>Editar Libro</h1>

        <form action="{{ route('libros.update', $libro->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $libro->titulo }}">
            </div>

            <div class="form-group">
                <label for="autor">Autor</label>
                <input type="text" class="form-control" id="autor" name="autor" value="{{ $libro->autor }}">
            </div>

            <div class="form-group">
                <label for="anio_publicacion">Año de Publicación</label>
                <input type="text" class="form-control" id="anio_publicacion" name="anio_publicacion" value="{{ $libro->anio_publicacion }}">
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
