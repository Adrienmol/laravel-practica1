<?php

namespace App\Http\Controllers;

use App\Http\Requests\CortoRequest;
use Illuminate\Http\Request;
use App\Models\Corto;

class CortosController extends Controller
{


    /*private array $cortos = [
        [
            'id' => 1,
            'titulo' => 'Teoría de PHP para dormir',
            'director' => 'Ricardo',
            'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ],
        [
            'id' => 2,
            'titulo' => 'React para dummies',
            'director' => 'Dani',
            'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ],
        [
            'id' => 3,
            'titulo' => 'Despliegue con Docker',
            'director' => 'Alex',
            'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ],
        [
            'id' => 4,
            'titulo' => 'Interfaces gráficas con Java',
            'director' => 'Ginés',
            'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ],
        [
            'id' => 5,
            'titulo' => 'MariaDB',
            'director' => 'Gonzalo',
            'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ]
    ];*/


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cortos = Corto::with(['director', 'usuario'])->get();

        return view('cortos.index')->with('cortos', $cortos);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Con Find se recupera el corto que tenga ese id.
        // Con FindOrFail el servidor se encarga de enviar el 'not found 404'
        $corto = Corto::with('director')->findOrFail($id);
        return view('cortos.show', compact('corto'));
    }

    /*
    * Delete a resource.
    */
    public function destroy($id)
    {
        Corto::findOrFail($id)->delete();
        $cortos = Corto::get();
        return view('cortos.index', compact('cortos'));
    }
   
    public function edit($id)
    {
        $corto = Corto::findOrFail($id);
        return view("cortos.edit", compact('corto'));
    }

    /**
     * Devuelve la vista para la creación de un corto nuevo
     */
    public function create()
    {
        return view("cortos.create");
    }

    public function store(CortoRequest $request)
    {

        $newCorto = new Corto();
        $newCorto->title = $request['title'];
        $newCorto->sinapsis = $request->get('sinapsis');
        $newCorto->user_id = $request['user_id'];
        $newCorto->director_id = $request['director_id'];
        // Guardar el nuevo corto en la BD
        $newCorto->save();

        return redirect()->route('cortos.index');
    }

    public function update(CortoRequest $request, Corto $corto) 
    {
        $corto->title = $request['title'];
        $corto->sinapsis = $request['sinapsis'];
        $corto->user_id = $request['user_id'];
        $corto->director_id = $request['director_id'];

        $corto->save();

        return redirect()->route('cortos.index');

    }
}
