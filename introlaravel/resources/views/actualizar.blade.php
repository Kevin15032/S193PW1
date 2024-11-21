@extends('layouts.plantilla')
@section('contenido')



<div class="card-body text-justify">
    <h2 class="text-center text-primary">Actualizar Cliente</h2>

    <form action="{{ route('rutaActualizarCliente', $cliente->id)}}" method="POST" onsubmit="return confirmarActualizacion()" >
        @csrf
        @method('PUT') 

        <div class="mb-3">
            <label for="nombre" class="form-label">{{__('Nombre')}}:</label>
            <input type="text" class="form-control" name="txtnombre" value="{{$cliente->nombre}}">
            <small class="text-danger fst-italic">{{ $errors->first('txtnombre') }}</small>

        </div>

        <div class="mb-3">
            <label for="apellido" class="form-label">{{__('Apellido')}}:</label>
            <input type="text" class="form-control" name="txtapellido" value="{{$cliente->apellido}}">
            <small class="text-danger fst-italic">{{ $errors->first('txtapellido') }}</small>

        </div>

        
        <div class="mb-3">
            <label for="correo" class="form-label">{{__('Correo')}}:</label>
            <input type="text" class="form-control" name="txtcorreo"  value="{{$cliente->correo}}">
            <small class="text-danger fst-italic">{{ $errors->first('txtcorreo') }}</small>
        </div>

        
        <div class="mb-3">
            <label for="telefono" class="form-label">{{__('Telefono')}}:</label>
            <input type="text" class="form-control" name="txttelefono"  value="{{$cliente->telefono}}">
            <small class="text-danger fst-italic">{{ $errors->first('txttelefono') }}</small>

        </div>
        
        <div class="card-footer text-muted">
            <div class="d-grid gap-2 mt-2 mb-1">
                <a href="{{ route('rutaClientes') }}" class="btn btn-primary">{{__('Cancelar')}}</a>
                <button type="submit" class="btn btn-success btn-sm">{{__('Actualizar')}}
                </button>
            </div>
        </div>
    </form>
</div>
<script>
    function confirmarActualizacion() {
        return confirm('¿Estás seguro de realizar los cambios?');
    }
</script>

@endsection






