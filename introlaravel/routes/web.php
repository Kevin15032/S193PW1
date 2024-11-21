<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;
use App\Http\Controllers\clienteController;

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

//rutas para controlador vistas

Route::get('/',[ControladorVistas::class,'home'])->name('rutaInicio');



//Route::get('/consultar',[ControladorVistas::class,'consulta'])->name('rutaClientes');

//Route::post('/enviarCliente',[ControladorVistas::class,'procesarCliente'])->name('rutaEnviar');

// rutas para controlador clienteController
Route::get('/cliente/create',[clienteController::class,'create'])->name('rutaFrom');

Route::post('/cliente',[clienteController::class,'store'])->name('rutaEnviar');

Route::get('/cliente',[clienteController::class,'index'])->name('rutaClientes');




Route::get('/clientes/{id}/edit',[clienteController::class,'edit'])->name('rutaEditarCliente');

Route::put('/clientes/{id}', [clienteController::class, 'update'])->name('rutaActualizarCliente');

Route::delete('/clientes/{id}', [ClienteController::class, 'destroy'])->name('rutaEliminarCliente');
