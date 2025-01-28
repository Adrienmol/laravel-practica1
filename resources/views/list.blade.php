@extends('template')

@section('titulo', 'Listado')

@section('contenido')
    <div class="d-flex flex-row">
        @foreach ($cortos as $corto)
            <div class="card m-1">
                <div class="card-body">
                    <h5 class="card-title"><strong>{{ $corto['titulo'] }}</strong></h5>
                    <p class="card-text">{{ $corto['director'] }}</p>
                    <p class="card-text">{{ $corto['sinapsis'] }}</p>
                    <a href="/cortos/{{$corto['id']}}"><button type="button" class="btn btn-primary">Ver</button></a>
                </div>
            </div>
        @endforeach
    </div>

@endsection
