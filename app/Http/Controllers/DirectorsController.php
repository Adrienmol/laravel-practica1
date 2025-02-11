<?php

namespace App\Http\Controllers;

use App\Http\Requests\DirectorRequest;
use Illuminate\Http\Request;
use App\Models\Director;

class DirectorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $directores = Director::get();
        
        return view('directores.index', compact('directores'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Con Find se recupera el corto que tenga ese id.
        // Con FindOrFail el servidor se encarga de enviar el 'not found 404'
        $director = Director::with('cortos')->findOrFail($id);
        return view('directores.show', compact('director'));
    }

    public function edit($id)
    {
        $director = Director::findOrFail($id);
        return view("directores.edit", compact('director'));
    }

    /**
     * Devuelve la vista para la creación de un corto nuevo
     */
    public function create()
    {
        return view("directores.create");
    }

    public function store(DirectorRequest $request)
    {

        $newDirector = new Director();
        $newDirector->name = $request['name'];
       
        // Guardar el nuevo corto en la BD
        $newDirector->save();

        return redirect()->route('directores.index');
    }

    public function update(DirectorRequest $request, string $directorId) 
    {        
        //hace falta la id porque la tabla no se llama igual (es directors, no directores)
        $newDirector = Director::findOrFail($directorId);
        $newDirector->name = $request['name'];

        $newDirector->save();

        return redirect()->route('directores.index');

    }

    /*
    * Delete a resource.
    */
    public function destroy($id)
    {
        Director::findOrFail($id)->delete();
        $directores = Director::get();
        return view('directores.index', compact('directores'));
    }
}
