@extends('template')

@section('titulo', 'Crear director')

@section('contenido')
    <a href="{{ route('directores.index') }}" class="btn btn-primary mb-2">Volver</a>
    <form action="{{ route('directores.store') }}" method="POST">
        @csrf
        <p>
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name">
        </p>      
        <input type="submit" value="Crear">
    </form>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection
