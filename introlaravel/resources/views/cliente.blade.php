@extends('layouts.plantilla')
@section('contenido')
@if(session('exito'))
        <script> 
            Swal.fire({
                title: "Respuesta del servidor!",
                text: "{{ session('exito') }}",
                icon: "success"
            });
        </script>
    @endif
    {{-- Inicia tarjetaCliente --}}
    <div class="container mt-5 col-md-8">
        @foreach ($consultaclientes as $cliente)
        <div class="card text-justify font-monospace mt-4">
            <div class="card-header fs-5 text-primary">{{$cliente->nombre}}</div>
            <div class="card-body">
                <h5 class="fw-bold">{{$cliente->correo}}</h5>
                <h5 class="fw-medium">{{$cliente->telefono}}</h5>
                <p class="card-text fw-lighter"></p>
            </div>
            <div class="card-footer text-muted">
                <a href="{{ route('rutaEditarCliente', $cliente->id)}}" class="btn btn-primary">{{__('Actualizar')}}</a> 
                <form action="{{ route('rutaEliminarCliente', $cliente->id) }}" method="POST" style="display:inline;" onsubmit="return confirmarEliminacion()">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">{{ __('Eliminar') }}</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
    {{-- Finaliza tarjetaCliente --}}
    

    <script>
        function confirmarEliminacion() {
            return confirm('¿Estás seguro de realizar los cambios?');
        }
    </script>
@endsection
