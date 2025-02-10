@extends('template')

@section('titulo', 'Directores')

@section('contenido')
    <div class="d-flex flex-column">
        @foreach ($directores as $director)
            <div class="card m-1">
                <div class="card-body">
                    <h5 class="card-title"><strong>{{ $director['name'] }}</strong></h5>                    
                    <a href="{{route('directores.show', $director['id'])}}"><button type="button" class="btn btn-primary">Ver</button></a>
                </div>
            </div>
        @endforeach
    </div>

@endsection