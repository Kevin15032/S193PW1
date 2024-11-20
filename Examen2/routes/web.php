<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controlador;

//Route::view('/','registro')->name('rutaPrincipal');

Route::get('/',[Controlador::class,'principa'])->name('rutaPrincipal');

Route::post('/validar',[Controlador::class,'registrar']);