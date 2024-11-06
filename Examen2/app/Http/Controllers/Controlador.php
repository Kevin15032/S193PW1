<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controlador extends Controller
{
    public function principa()
    {
        return view('registro');
    }

    public function  registrar(Request $peticion)
    {
        $validacion= $peticion->validate([
            'txtPrenda'=> 'required|string',
            'txtColor'=> 'required|string',
            'txtCantidad'=> 'required|numeric'
             ]);

             $usuario = $peticion->input('txtPrenda');
             session()->flash('exito','Se guardo la prenda: '.$usuario);

            return to_route('rutaPrincipal');
    }
}
