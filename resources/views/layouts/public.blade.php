<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo') - Mascotas</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

    <header>
        <h1>Zona Pública</h1>
        <nav>
            <a href="{{ route('zonapublica') }}">Inicio</a> |
            <a href="{{ route('formlogin') }}">Iniciar Sesión</a>
        </nav>
    </header>

    <main>
        @yield('contenido')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Dario Aguilar Rodriguez</p>
    </footer>

</body>
</html>
