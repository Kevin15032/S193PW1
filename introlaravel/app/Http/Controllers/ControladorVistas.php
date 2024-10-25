<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\Http\Requests\validadorCliente;

class ControladorVistas extends Controller
{
    public function home()
    {
        return view('inicio');
    }

    public function formulario()
    {
        return view('formulario');
    }

    public function consulta()
    {
        return view('cliente');
    }

    public function procesarCliente(validadorCliente $peticion)
    {
        // return 'Si llego la info del cliente :)';

        //mostramos todo lo que trae la petición 

        //return $peticion->all();

        //return $peticion->path();

       // return $peticion->url();

       //return $peticion->ip();

       //$usuario= $peticion->input('txtnombre');
    //session()->flash('exito','Seguardo el usuario: ' .$usuario);
    //return to_route('rutaFrom');
    // $validacion= $peticion->validate([
    //     'txtnombre'=> 'required|min:4 |max:20 ',
    //     'txtapellido'=> 'required',
    //     'txtcorreo'=> 'required',
    //     'txttelefono'=> 'required|numeric'
    //   ]);

      //redireccion con un mensaje flash
      $usuario = $peticion->input('txtnombre');
      session()->flash('exito','Se guardo el usuario: '.$usuario);

      return to_route('rutaFrom');

    }

    

}
