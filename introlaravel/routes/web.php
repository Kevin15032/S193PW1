<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;

// Route::get('/', function () {
//     return view('inicio');
// })->name('rutaInicio');

// Route::get('/from', function () {
//     return view('formulario');
// })->name('rutaFrom');

// Route::get('/consultar', function () {
//     return view('cliente');
// })->name('rutaClientes');

// Route::view('/','inicio')->name('rutaInicio');
// Route::view('/from','formulario')->name('rutaFrom');
// Route::view('/consultar','cliente')->name('rutaClientes');
// Route::view('/componet','componentes')->name('rutaComponent');

Route::get('/',[ControladorVistas::class,'home'])->name('rutaInicio');

Route::get('/from',[ControladorVistas::class,'formulario'])->name('rutaFrom');

Route::get('/consultar',[ControladorVistas::class,'consulta'])->name('rutaClientes');