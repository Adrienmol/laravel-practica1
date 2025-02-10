<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CortosController;
use App\Http\Controllers\DirectorsController;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('index');
});

// Con resource se crean todas las rutas con raiz el controlador especificado (controlador de recursos)
Route::resource('cortos', CortosController::class);

Route::resource('directores', DirectorsController::class)->only(['index', 'show']);

Route::resource('usuarios', UsersController::class)->only(['index', 'show']);

