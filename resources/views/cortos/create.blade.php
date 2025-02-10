@extends('template')

@section('titulo', 'Crear corto')

@section('contenido')
    <a href="{{ route('cortos.index') }}" class="btn btn-primary mb-2">Volver</a>
    <form action="{{ route('cortos.store') }}" method="POST">
        @csrf
        @method('PUT')
        <p>
            <label for="title">Título:</label>
            <input type="text" name="title" id="title">
        </p>
        <p>
            <label for="sinapsis">Sinapsis:</label>
            <input type="text" name="sinapsis" id="sinapsis">
        </p>
        <p>
            <label for="user_id">ID de Usuario:</label>
            <input type="number" name="user_id" id="user_id" min="1">
        </p>
        <p>
            <label for="director_id">ID de Director:</label>
            <input type="number" name="director_id" id="director_id" min="1">
        </p>
        <input type="submit" value="Crear">
    </form>
@endsection