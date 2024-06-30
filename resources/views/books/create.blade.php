<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
    <h1>Agregar Libro</h1>
    <form action="{{ url('books') }}" method="POST" autocomplete="off">
        @csrf
        <div>
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo">
        </div>
        <div>
            <label for="año">Año</label>
            <input type="integer" name="año">
        </div>
        <div>
            <label for="autor">Autor</label>
            <input type="text" name="autor">
        </div>
        <div>
            <label for="editorial">Editorial</label>
            <input type="text" name="editorial">
        </div>
        <div>
            <button type="submit">Agregar</button>
            <button type="reset">Cancelar</button>
        </div>
    </form>
    </div>
</body>
</html>