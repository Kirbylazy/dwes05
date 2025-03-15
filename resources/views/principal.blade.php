<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=100%, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página principal</title>
</head>
<body>
    <H2>Bienvenido a la página principal PÚBLICA.</H2>
    <h1>Listado de Mascotas Públicas</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Tipo</th>
                <th>Dueño</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($mascotasDAR as $mascota)
            <tr>
                <td>{{ $mascota->id }}</td>
                <td>{{ $mascota->nombre }}</td>
                <td>{{ $mascota->descripcion }}</td>
                <td>{{ $mascota->tipo }}</td>
                <td>{{ $mascota->user->name }}</td> <!-- Relación con usuario -->
            </tr>
        @endforeach
        </tbody>
    </table>
    <br>
    @auth
        Estás autenticado, puedes ir a ...
        <A href="{{ route('zonaprivada') }}">tu zona privada</A><BR>
    @endauth
    @guest
        No estás autenticado, por favor ...
        <A href="{{ route('formlogin') }}">inicia sesión.</A><BR>
    @endguest

</body>
</html>