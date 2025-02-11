@extends('template')

@section('titulo', 'Editar Director')

@section('contenido')

    <a href="{{ route('directores.index') }}" class="btn btn-primary mb-2">Volver</a>
    <form action="{{ route('directores.update', $director['id']) }}" method="POST">
        @csrf   
        @method('PUT')     
        <p>
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name" value="{{$director['name']}}">
        </p>
        
        <input type="submit" value="Editar">
    </form>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
@endsection