<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Lista de Libros</h1> <a href="books/create"><button>Agregar Libro</button></a>
        @include('books.search')
        <a href="loans/create"><button>Adquirir un Libro</button></a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Año</th>
                    <th>Autor</th>
                    <th>Editorial</th>
                    <th>Disponibilidad</th>
                </tr>
            </thead>
            @foreach ($libros as $libro)
                <tr>
                    <td>{{ $libro->titulo }}</td>
                    <td>{{ $libro->año }}</td>
                    <td>{{ $libro->autor }}</td>
                    <td>{{ $libro->editorial }}</td>
                    <td>@if ($libro->prestamos->isEmpty())
                            No Prestado
                        @else
                            @foreach ($libro->prestamos as $prestamo)
                                    {{ $prestamo->devuelto ? 'Sí' : 'No' }}<br>
                            @endforeach
                        @endif
                    </td>
                </tr>
            @endforeach
        </table>
        <div class="pagination">
            {{$libros->links()}}
        </div>
    </div>

</body>
</html>