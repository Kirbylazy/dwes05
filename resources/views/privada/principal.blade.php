<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=100%, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ZONA PRIVADA</title>
</head>
<body>
<h1>Bienvenido {{ Auth::user()->name }} a la página principal de la zona PRIVADA.</h1>

<h2>Mis Mascotas</h2>

@if(count($mascotasDAR) > 0)
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
                <td>{{ $mascota->publica }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@else
    <p>No tienes mascotas registradas.</p>
@endif

<p><a href="{{ route('zonapublica') }}">Ve a la zona pública</a></p>
<p><a href="{{ route('logout') }}">Cierra sesión</a></p>

</body>
</html>