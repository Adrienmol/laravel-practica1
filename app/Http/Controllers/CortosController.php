<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CortosController extends Controller
{


    private array $cortos = [
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
    ];


    /**
     * Display a listing of the resource.
     */
    public function index() {
        return view('list')->with('cortos', $this->cortos);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {
        $cortoReturn = "corto";
        foreach ($this->cortos as $corto) {
            if ($corto['id'] == $id) {
                $cortoReturn = $corto;
            }
        }
        
        return view('show-corto')->with('corto', $cortoReturn);
    }
}
