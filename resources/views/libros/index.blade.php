@extends ('plantilla')

@section('content')
    <div class="container">
        <h1>Listado de Libros</h1>

        <a href="{{ route('libros.create') }}" class="btn btn-primary mb-3">Agregar Libro</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Año de Publicación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($libros as $libro)
                    <tr>
                        <td>{{ $libro->titulo }}</td>
                        <td>{{ $libro->autor }}</td>
                        <td>{{ $libro->anio_publicacion }}</td>
                        <td>
                            <a href="{{ route('libros.show', $libro->id) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('libros.edit', $libro->id) }}" class="btn btn-primary btn-sm">Editar</a>
                            <form action="{{ route('libros.destroy', $libro->id) }}" method="POST" style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este libro?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No hay libros registrados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
