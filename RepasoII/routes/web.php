<?php

use Illuminate\Support\Facades\Route;

Route::view('/','principal')->name('rutaPrincipal');
Route::view('/resgistro','registrolibros')->name('rutaRegistrolibros');