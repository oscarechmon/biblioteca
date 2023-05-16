@extends('plantilla')

@section('content')

<div class="row">
    <div class="col-md-7">
        <table class="table">
            <tr>
              
                <td>ID</td>
                <td>Nombre</td>
                <td>Decripcion</td>
                <td>Acciones</td>
            </tr>
            @foreach ($autors as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->nombre}}</td>
                <td>{{$item->descripcion}}</td>
                <td>
                    <a href="{{route('editar',$item ->id)}}"class="btn btn-warning">editar</a>
                    <form action="{{route('eliminar',$item ->id)}}" method="POST"class=" d-inline">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
                
            @endforeach
        </table>
        @if (session('eliminar'))
    <div class="alert alert-success mt-3">
        {{session('eliminar')}}
    </div>
    
@endif
    </div>
    <div class="col-md-5">
        <h5>Agregar Autor</h5>
        <form action="{{route('store')}}" method="POST">
            @csrf 
            <div class="form-group">
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese nombre">
            </div>
            @error('nombre')
                <div class="alert alert-danger">
                    Se requiere nombre
                </div>
            @enderror
            <div class="form-group">
                <input type="text" name="descripcion" id="descripcion" class="form-control" placeholder="Ingrese descripcion">
            </div>
            @error('descripcion')
                <div class="alert alert-danger">
                    Se requiere
                </div>
            @enderror
            <button type="submit" class="btn btn-success btn-nlock">Registrar autor</button>
        </form>
        @if (session('agregar'))
            <div class="alert alert-success mt-3">
                {{session('agregar')}}
            </div>
            
        @endif
    </div>
</div>
    
@endsection