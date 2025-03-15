@extends('layouts.public')

@section('titulo', 'Página Pública')

@section('contenido')

    <h2>Listado de Mascotas Públicas</h2>

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
                <td>{{ $mascota->user->name }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
