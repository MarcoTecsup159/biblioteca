<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Préstamos</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Lista de Préstamos</h1>
        <a href="{{ url('loans/create') }}"><button>Agregar Préstamo</button></a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Libro</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Devolución</th>
                    <th>Devuelto</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            @foreach ($prestamos as $prestamo)
            <tr>
                <td>{{ $prestamo->book->titulo }}</td>
                <td>{{ $prestamo->fecha_inicio }}</td>
                <td>{{ $prestamo->fecha_devolucion }}</td>
                <td>{{ $prestamo->devuelto ? 'Sí' : 'No' }}</td>
                <td>
                    <a href="{{ URL::action('App\Http\Controllers\LoanController@edit', $prestamo->id) }}">Editar</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    {{ $prestamos->links() }}
</body>
</html>