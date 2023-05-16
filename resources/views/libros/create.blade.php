@extends ('plantilla')

@section('content')
    <div class="container">
        <h1>Agregar Libro</h1>

        <form action="{{ route('libros.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingrese el título del libro">
            </div>

            <div class="form-group">
                <select name="autor_id">
                    @foreach ($autores as $autor)
                        <option value="{{ $autor->id }}">{{ $autor->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
