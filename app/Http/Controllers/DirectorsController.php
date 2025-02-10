<?php

namespace App\Http\Controllers;

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
}
