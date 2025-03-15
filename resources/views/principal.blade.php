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