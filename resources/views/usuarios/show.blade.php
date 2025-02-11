@extends('template')
@section('titulo', $usuario['name'])
@section('contenido')
    <div class="card text-center">
        <div class="card-header">
            <h1>{{ $usuario['name'] }}</h1>
            <a href="{{ route('usuarios.edit', $usuario['id']) }}"><button class="btn btn-primary">Editar</button></a>
        </div>

        <h1>Cortos:</h1>
        @foreach ($usuario->cortos as $corto)
            <div class="card m-1">
                <div class="card-body">
                    <h5 class="card-title"><strong>{{ $corto['title'] }}</strong></h5>
                    <a href="{{ route('cortos.show', $corto['id']) }}"><button type="button"
                            class="btn btn-primary">Ver</button></a>
                </div>
            </div>
        @endforeach

        <a href="{{ route('usuarios.index') }}"><button type="button" class="btn btn-primary">Volver</button></a>
    </div>
@endsection
