<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CortosController;

Route::get('/', function () {
    return view('index');
});

// Con resource se crean todas las rutas con raiz el controlador especificado
Route::resource('cortos', CortosController::class)->only(['index', 'show']);

