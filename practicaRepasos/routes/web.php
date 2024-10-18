<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorPractica;

// Route::view('/','inicio')->name('rutaInicio');
// Route::view('/repaso','repaso1')->name('rutaRepaso');

Route::get('/', [ControladorPractica::class, 'home'])->name('rutaInicio');
Route::get('/repaso', [ControladorPractica::class, 'repaso1'])->name('rutaRepaso');
Route::post('/enviarmensaje', [ControladorPractica::class, 'convertidor'])->name('rutaConvertidor');
Route::post('/convertidor2', [ControladorPractica::class, 'convertirGBaMB'])->name('rutaConvertidor2');
Route::post('/convertidor3', [ControladorPractica::class, 'convertirGBaTB'])->name('rutaConvertidor2');
Route::post('/convertidor4', [ControladorPractica::class, 'convertirTBaGB'])->name('rutaConvertidor2');