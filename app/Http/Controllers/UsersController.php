<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
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

    public function store(UserRequest $request)
    {

        $newUser = new User();
        $newUser->name = $request['name'];
        $newUser->password = $request->get('password');
        $newUser->email = $request->get('email');
        
        // Guardar el nuevo corto en la BD
        $newUser->save();

        return redirect()->route('usuarios.index');
    }

    public function create()
    {
        return view("usuarios.create");
    }

    public function update(UserRequest $request, string $userId) 
    {
        $newUser = User::findOrFail($userId);
        $newUser->name = $request['name'];
        $newUser->password = $request['password'];
        $newUser->email = $request['email'];

        $newUser->save();

        return redirect()->route('usuarios.index');

    }

    public function edit($id)
    {
        $usuario = User::findOrFail($id);
        return view("usuarios.edit", compact('usuario'));
    }
}
