<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro Prenda</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <h1>Registro prendas</h1>
    @if(session('exito'))
    <script> 
        Swal.fire({
            title: "Respuesta del servidor!",
            text: "{{ session('exito') }}",
            icon: "success"
        });
    </script>
     @endif
    <form action="/procesar"  method="POST">
    @csrf
    <label for="">Prenda:</label>
    <input type="text"  name="txtprenda">
    <small class="text-danger fst-italic">{{$errors->first('txtprenda')}}</small>
    <label for="">Color:</label>
    <input type="text" name="txtcolor">
    <small class="text-danger fst-italic">{{$errors->first('txtcolor')}}</small>
    <label for="">Cantidad:</label>
    <input type="text" name="txtcantidad">
    <small class="text-danger fst-italic">{{$errors->first('txtcantidad')}}</small>
    <button type="submit">guadar prendas</button>
    </form>
</body>
</html>