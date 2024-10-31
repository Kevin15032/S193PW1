<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVista extends Controller
{
    //
    public function principal()
    {
        return view('principal');
    }

    public function registro()
    {
        return view('registrolibros');
    }

    public function procesarLibro(Request $peticion)
    {
        $validacion = $peticion->validate([
            'txtisbn' => 'required|numeric|digits:13', 
            'txttitulo' => 'required|string|max:150', 
            'txtautor' => 'required|string|max:100', 
            'txtpaginas' => 'required|integer|min:1', 
            'txtaño' => 'required|integer|digits:4|min:1000|max:' . date('Y'), 
            'txteditorial' => 'required|string|max:100',
            'txtemail' => 'required|email'
        ]);
        
        $titulo = $peticion->input('txttitulo');
        session()->flash('exito', 'Se guardó el Libro: ' . $titulo);
        return to_route('rutaRegistrolibros');

   
        
    }

}
