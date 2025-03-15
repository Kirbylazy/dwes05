@extends('layouts.private')

@section('titulo', 'Zona Privada')

@section('contenido')

    <h2>Mis Mascotas</h2>

    @if (session('success'))
        <p style="color: green; font-weight: bold;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('formmascotaDAR') }}">
        <button>➕ Crear Nueva Mascota</button>
    </a>

    @if(count($mascotasDAR) > 0)
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Tipo</th>
                    <th>Estado</th>
                    <th>Acciones</th>
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
                    <td>
                        <form action="{{ route('eliminarMascotaDAR', ['id' => $mascota->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('¿Seguro que quieres eliminar esta mascota?')">🗑 Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p>No tienes mascotas registradas.</p>
    @endif

@endsection
