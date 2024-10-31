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
        $titulo = $peticion->input('txttitulo');
        session()->flash('exito', 'Se guardó el Libro: ' . $titulo);
        return to_route('rutaRegistrolibros');
    }

}
