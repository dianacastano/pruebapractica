<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VecinoController;

// Rutas para el manejo de vecinos utilizando el controlador VecinoController

Route::get('/', function () {
    return view('create');
});

// Procesar el formulario para añadir un nuevo vecino
Route::post('/vecinos', [VecinoController::class, 'store'])->name('vecinos.store');

// Rutas para mostrar la lista de vecinos y otras funcionalidades
Route::get('/vecinos', [VecinoController::class, 'index'])->name('vecinos.index');

