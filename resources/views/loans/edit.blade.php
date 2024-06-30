<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Préstamo</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Editar Préstamo</h1>
        <form action="{{ url('loans/' . $loan->id) }}" method="POST" autocomplete="off">
            @csrf
            @method('PUT')
            <div>
                <label for="devuelto">Devuelto</label>
                <select name="devuelto">
                    <option value="1" {{ $loan->devuelto ? 'selected' : '' }}>Sí</option>
                    <option value="0" {{ !$loan->devuelto ? 'selected' : '' }}>No</option>
                </select>
            </div>
            <div>
                <button type="submit">Guardar</button>
            </div>
        </form>
    </div>
</body>
</html>