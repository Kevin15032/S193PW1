@extends('layouts.platilla')
@section('contenido')
<div class="card font-monospace">
    <div class="card-header fs-5 text-center text-primary">
        {{__('Registro de Libros')}}
    </div>

    @if(session('exito'))
        <script> 
            Swal.fire({
                title: "Respuesta del servidor!",
                text: "{{ session('exito') }}",
                icon: "success"
            });
        </script>
    @endif

    <div class="card-body text-justify">
        <form action="{{ route('rutaLibro') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="isbn" class="form-label">{{__('ISBN')}}:</label>
                <input type="text" class="form-control" name="txtisbn" value="{{ old('txtisbn') }}">
                <small class="text-danger fst-italic">{{$errors->first('txtisbn')}}</small>
            </div>

            <div class="mb-3">
                <label for="titulo" class="form-label">{{__('Titulo')}}:</label>
                <input type="text" class="form-control" name="txttitulo" value="{{ old('txttitulo') }}">
                <small class="text-danger fst-italic">{{$errors->first('txttitulo')}}</small>
            </div>

            <div class="mb-3">
                <label for="autor" class="form-label">{{__('Autor')}}:</label>
                <input type="text" class="form-control" name="txtautor" value="{{ old('txtautor') }}">
                <small class="text-danger fst-italic">{{$errors->first('txtautor')}}</small>
            </div>

            <div class="mb-3">
                <label for="paginas" class="form-label">{{__('Paginas')}}:</label>
                <input type="text" class="form-control" name="txtpaginas" value="{{ old('txtpaginas') }}">
                <small class="text-danger fst-italic">{{$errors->first('txtpaginas')}}</small>
            </div>

            <div class="mb-3">
                <label for="año" class="form-label">{{__('Año')}}:</label>
                <input type="text" class="form-control" name="txtaño" value="{{ old('txtaño') }}">
                <small class="text-danger fst-italic">{{$errors->first('txtaño')}}</small>
            </div>

            <div class="mb-3">
                <label for="editorial" class="form-label">{{__('Editorial')}}:</label>
                <input type="text" class="form-control" name="txteditorial" value="{{ old('txteditorial') }}">
                <small class="text-danger fst-italic">{{$errors->first('txteditorial')}}</small>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">{{__('Email de Editorial')}}:</label>
                <input type="text" class="form-control" name="txtemail" value="{{ old('txtemail') }}">
                <small class="text-danger fst-italic">{{$errors->first('txtemail')}}</small>
            </div>

            <button type="submit" class="btn btn-success btn-sm">{{__('Guardar')}}</button>
        </form>
    </div>
</div>
<footer>
    <div class="container-fluid">
        <div class="row text-center">
         <p>
            © 2023 Biblioteca de Queretaro. Todos los derechos reservados.
         </p>
         </div>
         </div>
</footer>

@endsection