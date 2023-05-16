@extends ('plantilla')
@section('content')
    <h1>Actualizar autor {{$autorActualizar->nombre}}</h1>
    <form action="{{route('update',$autorActualizar->id)}}" method="POST">
        @method('PUT')
        @csrf 
        <div class="form-group">
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{$autorActualizar->nombre}}">
        </div>
        <div class="form-group">
            <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{$autorActualizar->descripcion}}">
        </div>
        <button type="submit" class="btn btn-success btn-nlock">Editar</button>
    </form>
    @if (session('update'))
    <div class="alert alert-success mt-3">
        {{session('update')}}
    </div>
    
@endif
@endsection