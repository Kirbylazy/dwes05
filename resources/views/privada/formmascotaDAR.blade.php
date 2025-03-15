<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Mascota</title>
</head>
<body>
    <h1>Registrar una nueva Mascota</h1>

    @if (session('success'))
    <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if ($errors->any())
        <h3>Se han producido errores en el formulario:</h3>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('nuevamascotaDAR') }}">
        @csrf
        
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>
        <br>

        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" required></textarea>
        <br>

        <label for="tipo">Tipo de mascota:</label>
        <select name="tipo" required>
            <option value="Perro">Perro</option>
            <option value="Gato">Gato</option>
            <option value="Pájaro">Pájaro</option>
            <option value="Dragón">Dragón</option>
            <option value="Conejo">Conejo</option>
            <option value="Hamster">Hamster</option>
            <option value="Tortuga">Tortuga</option>
            <option value="Pez">Pez</option>
            <option value="Serpiente">Serpiente</option>
        </select>
        <br>

        <label>¿Mascota pública?</label>
        <input type="radio" name="publica" value="Si" required> Sí
        <input type="radio" name="publica" value="No" required> No
        <br>

        <button type="submit">Guardar Mascota</button>
    </form>

    <br>
    <a href="{{ route('zonaprivada') }}">Volver a la Zona Privada</a>
</body>
</html>