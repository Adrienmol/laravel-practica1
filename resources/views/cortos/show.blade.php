@extends('template')
@section('titulo', $corto['titulo'])
@section('contenido')
    <div class="card text-center">
        <div class="card-header">{{ $corto['id'] }}</div>
        <div class="card-body">
            <h5 class="card-title">{{ $corto['title'] }}</h5>
            <p class="card-text">{{ $corto['sinapsis'] }}</p>
        </div>
        <div class="card-footer text-muted">{{ $corto->director['name'] }}</div>
        <a href="{{ route('cortos.index') }}"><button type="button" class="btn btn-primary mb-2">Volver</button></a>
        
        <form action="{{ route('cortos.destroy', $corto['id']) }}" method="POST">
            @method('DELETE')
            @csrf
            <input type="submit" class="btn btn-danger" value="Borrar"></input>
        </form>

    </div>
@endsection
