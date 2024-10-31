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

    public function procesarLibro($peticion)
    {
        return 'Si llego la info del cliente :)';
    }

}
