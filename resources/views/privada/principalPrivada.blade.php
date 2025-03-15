<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zona Privada</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Mis Mascotas</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Tipo</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($mascotasDAR as $mascota)
            <tr>
                <td>{{ $mascota->id }}</td>
                <td>{{ $mascota->nombre }}</td>
                <td>{{ $mascota->descripcion }}</td>
                <td>{{ $mascota->tipo }}</td>
                <td>{{ $mascota->publica }}</td> <!-- 'Si' o 'No' -->
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>
