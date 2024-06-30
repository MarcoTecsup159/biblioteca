<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Préstamo</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1 class="mb-4">Préstamo de Libro</h1>
        <form action="{{ url('loans') }}" method="POST" autocomplete="off">
            @csrf
            <div>
                <label for="book_id">Libro</label>
                <select name="book_id">
                    @foreach($books as $book)
                        <option value="{{ $book->id }}">{{ $book->titulo }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="fecha_inicio">Fecha Inicio</label>
                <input type="date" name="fecha_inicio">
            </div>
            <div>
                <label for="fecha_devolucion">Fecha Devolución</label>
                <input type="date" name="fecha_devolucion">
            </div>
            <div>
                <button type="submit">Adquirir</button>
                <button type="reset">Cancelar</button>
            </div>
        </form>
    </div>
</body>
</html>