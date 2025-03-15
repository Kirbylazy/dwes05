<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo') - Panel Privado</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

    <header>
        <h1>Panel Privado - Bienvenido {{ Auth::user()->name }}</h1>
        <nav>
            <a href="{{ route('zonaprivada') }}">Inicio</a> |
            <a href="{{ route('logout') }}">Cerrar Sesión</a>
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
