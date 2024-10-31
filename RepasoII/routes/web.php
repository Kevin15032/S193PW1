<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVista;

// Route::view('/','principal')->name('rutaPrincipal');
// Route::view('/resgistro','registrolibros')->name('rutaRegistrolibros');


Route::get('/',[ControladorVista::class,'principal'])->name('rutaPrincipal');
Route::get('/resgistro',[ControladorVista::class,'registro'])->name('rutaRegistrolibros');
Route::post('/enviarLibro',[ControladorVista::class,'procesarLibro'])->name('rutaLibro');