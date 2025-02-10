<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = User::get();
        
        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Con Find se recupera el corto que tenga ese id.
        // Con FindOrFail el servidor se encarga de enviar el 'not found 404'
        $usuario = User::with('cortos')->findOrFail($id);
        return view('usuarios.show', compact('usuario'));
    }
}
