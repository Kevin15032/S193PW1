@extends('layouts.plantilla')
@section('contenido')
@if (session('exito'))
    <div class="alert alert-success">
        {{ session('exito') }}
    </div>
@endif

    {{-- Inicia tarjetaCliente --}}
    <div class="container mt-5 col-md-8">
        @foreach ($consulta as $cliente)
            
       
        <div class="card text-justify font-monospace">
            <div class="card-header fs-5 text-primary">{{$cliente->nombre}} - {{$cliente->apellido}}</div>
            <div class="card-body">
                <h5 class="fw-bold">{{$cliente->correo}}</h5>
                <h5 class="fw-medium">{{$cliente->telefonoz}}</h5>
                <p class="card-text fw-lighter"></p>
            </div>
            <div class="card-footer text-muted">
                <a href="{{ route('cliente.edit', $cliente->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('cliente.destroy', $cliente->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('¿Estás seguro de eliminar este cliente?')">Eliminar</button>
                </form>
            </div>
        </div>
    </div>

    {{-- Finaliza tarjetaCliente --}} 
    @endforeach
    @endsection