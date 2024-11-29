<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;

class ClienteController extends Controller
{

    public function home()
    {
        return view('inicio');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consulta=cliente::all();
        return view('cliente',compact('consulta'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorCliente $request)
    {
        $addCliente= new cliente();
        $addCliente->nombre=$request->input('txtnombre');
        $addCliente->apellido=$request->input('txtapellido');
        $addCliente->correo=$request->input('txtcorreo');
        $addCliente->telefono=$request->input('txttelefono');
        $addCliente->save();

        $msj= $request->input('txtnombre');
        session()->flash('exito','Se guardo el cliente: '.$msj);
        return redirect()->route('cliente.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cliente $cliente)
    {
        return view('Actualizar', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(validadorCliente $request, cliente $cliente)
    {
        $cliente->update([
            'nombre' => $request->input('txtnombre'),
            'apellido' => $request->input('txtapellido'),
            'correo' => $request->input('txtcorreo'),
            'telefono' => $request->input('txttelefono'),
        ]);

    session()->flash('exito', 'El cliente ' . $cliente->nombre . ' fue actualizado correctamente.');

    return redirect()->route('cliente.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cliente $cliente)
    {
        $cliente->delete();

        session()->flash('exito', 'El cliente fue eliminado correctamente.');
    
        return redirect()->route('cliente.index');
    }
}
