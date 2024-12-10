<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controlador;

Route::get('/', [controlador::class, 'home'])->name('rutaInicio');
Route::post('/procesar', [controlador::class, 'procesarPrenda']);

