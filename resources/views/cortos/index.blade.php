@extends('template')

@section('titulo', 'Cortos')

@section('contenido')
    <div class="d-flex flex-column">
        <a href="{{ route('cortos.create') }}" class="btn btn-primary">Añadir un corto</a>
        @foreach ($cortos as $corto)
            <div class="card m-1">
                <div class="card-body">
                    <h5 class="card-title"><strong>{{ $corto['title'] }}</strong></h5>
                    <p class="card-text">{{ $corto['sinapsis'] }}</p>
                    <p>Director: <b>{{$corto->director->name}}</b></p>
                    <p>Usuario: <b>{{$corto->usuario->name}}</b></p>
                    <a href="/cortos/{{$corto['id']}}"><button type="button" class="btn btn-primary">Ver</button></a>
                </div>
            </div>
        @endforeach
    </div>

@endsection
