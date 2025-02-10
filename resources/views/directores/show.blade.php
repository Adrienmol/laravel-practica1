@extends('template')
@section('titulo', $director['name'])
@section('contenido')
    <div class="card text-center">
        <div class="card-header">{{$director['name']}}</div>
        <h1>Cortos:</h1>
        @foreach ($director->cortos as $corto)
        <div class="card m-1">
            <div class="card-body">
                <h5 class="card-title"><strong>{{ $corto['title'] }}</strong></h5>                    
                <a href="{{route('cortos.show', $corto['id'])}}"><button type="button" class="btn btn-primary">Ver</button></a>
            </div>
        </div>
        @endforeach   

        <a href="{{route('directores.index')}}"><button type="button" class="btn btn-primary">Volver</button></a>
    </div>
@endsection