<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=100%, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ZONA PRIVADA</title>
</head>
<body>
    @auth
    <H2>Bienvenido {{ Auth::user()->name}} a la página principal de la zona PRIVADA.</H2>
        <A href="{{ route('zonapublica') }}">Ve a la zona pública</A><BR>
        <A href="{{ route('logout') }}">Cierra sesión.</A></BR>
    @endauth

</body>
</html>