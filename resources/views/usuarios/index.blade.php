@extends('template')

@section('titulo', 'Usuarios')

@section('contenido')
    <div class="d-flex flex-row">
        @foreach ($usuarios as $usuario)
            <div class="card m-1">
                <div class="card-body">
                    <h5 class="card-title"><strong>{{ $usuario['name'] }}</strong></h5>                    
                    <a href="{{route('usuarios.show', $usuario  ['id'])}}"><button type="button" class="btn btn-primary">Ver</button></a>
                </div>
            </div>
        @endforeach
    </div>

@endsection