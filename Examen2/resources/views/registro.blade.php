<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Prendas</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <H1>Registro de prendas</H1>
    
    @if(session('exito'))
        <script> 
            Swal.fire({
                title: "Respuesta del servidor!",
                text: "{{ session('exito') }}",
                icon: "success"
            });
        </script>
    @endif
    <form action="/validar"  method="POST">
    @csrf
    <label for="valor">Prenda</label>
    <input type="text" name="txtPrenda">
    <small class="text-danger fst-italic">{{ $errors->first('txtPrenda') }}</small>
    <label for="valor">Color</label>
    <input type="text" name="txtColor">
    <small class="text-danger fst-italic">{{ $errors->first('txtColor') }}</small>
    <label for="valor">Cantidad</label>
    <input type="text" name="txtCantidad">
    <small class="text-danger fst-italic">{{ $errors->first('txtCantidad') }}</small>
    <button type="submit">Guardar Prenda</button>
</form>
</body>
</html>