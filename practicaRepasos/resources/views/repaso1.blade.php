<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Repaso 1</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="container my-5 p-4 bg-light border rounded">
        <h1 class="text-center">Bienvenido a mi convertidor super profecional :)</h1>
        <form action="/enviarmensaje" method="POST">
            @csrf
            <label for="valor">Convertidor de MB a GB:</label>
            <input type="number" name="valor" placeholder="Ingresa el valor" required> 
            <button type="submit" class="btn btn-success btn-dark">Convertir</button>
        </form>
    </div>

    <div class="container my-5 p-4 bg-light border rounded">
        <form action="convertidor2" method="POST">
            @csrf
            <label for="valor">Convertidor de GB a MB:</label>
            <input type="number" name="valor" placeholder="Ingresa el valor" required> 
            <button type="submit" class="btn btn-success btn-dark">Convertir</button>
        </form>
    </div>

    <div class="container my-5 p-4 bg-light border rounded">
        <form action="/convertidor3" method="POST">
            @csrf
            <label for="valor">Convertidor de GB a TB:</label>
            <input type="number" name="valor" placeholder="Ingresa el valor" required> 
            <button type="submit" class="btn btn-success btn-dark">Convertir</button>
        </form>
    </div>
    <div class="container my-5 p-4 bg-light border rounded">
        <form action="convertidor4" method="POST">
            @csrf
            <label for="valor">Convertidor de TB a GB:</label>
            <input type="number" name="valor" placeholder="Ingresa el valor" required> 
            <button type="submit" class="btn btn-success btn-dark">Convertir</button>
        </form>
    </div>
</body>
</html>