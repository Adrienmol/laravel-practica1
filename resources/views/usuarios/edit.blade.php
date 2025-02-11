@extends('template')

@section('titulo', 'Editar Usuario')

@section('contenido')

    <a href="{{ route('usuarios.index') }}" class="btn btn-primary mb-2">Volver</a>
    <form action="{{ route('usuarios.update', $usuario['id']) }}" method="POST">
        @csrf   
        @method('PUT')     
        <p>
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name" value="{{$usuario['name']}}">
        </p>
        <p>
            <label for="password">Contraseña:</label>    
            <input type="password" name="password">
        </p>
        <p>
            <label for="password_confirmation">Repite contraseña:</label>
            <input type="password" name="password_confirmation">
        </p>
        <p>
            <label for="email">Email:</label>
            <input type="email" placeholder="ejemplo@gmail.com" name="email" value="{{$usuario['email']}}">
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