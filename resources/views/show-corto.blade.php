@extends('template')
@section('titulo', $corto['titulo'])
@section('contenido')
    <div class="card text-center">
        <div class="card-header">{{$corto['id']}}</div>
        <div class="card-body">
            <h5 class="card-title">{{$corto['titulo']}}</h5>
            <p class="card-text">{{$corto['sinapsis']}}</p>           
        </div>
        <div class="card-footer text-muted">{{$corto['director']}}</div>
    </div>
@endsection
