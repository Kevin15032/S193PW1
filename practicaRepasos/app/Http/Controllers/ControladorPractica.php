<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorPractica extends Controller
{
    public function home()
    {
      return view('inicio');

    }
    public function repaso1()
    {
     return view ('repaso1');

    }
   
    public function convertidor(Request $request)
    {
        $valor = $request->input('valor'); 
        $resultado = $valor * 0.001;
        return (string)$resultado;
    }
    public function convertirGBaMB(Request $request)
    {
        $valor = $request->input('valor'); 
        $resultado = $valor * 1000;
        return (string)$resultado;
    }
    public function convertirGBaTB(Request $request)
    {
        $valor = $request->input('valor'); 
        $resultado = $valor * 0.001;
        return (string)$resultado;
    }
    public function convertirTBaGB(Request $request)
    {
        $valor = $request->input('valor'); 
        $resultado = $valor * 1000;
        return (string)$resultado;
    }
}
