<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('inicio');
// })->name('rutaInicio');

// Route::get('/from', function () {
//     return view('formulario');
// })->name('rutaFrom');

// Route::get('/consultar', function () {
//     return view('cliente');
// })->name('rutaClientes');

Route::view('/','inicio')->name('rutaInicio');
Route::view('/from','formulario')->name('rutaFrom');
Route::view('/consultar','cliente')->name('rutaClientes');
Route::view('/componet','componentes')->name('rutaComponent');