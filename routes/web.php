<?php

use App\Models\MascotaDAR;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Ruta a la zona pública
Route::get('/', function () {
    $mascotas = MascotaDAR::where('publica', 'Si')->get(); // Obtener solo las mascotas públicas

    return view('principal', ['mascotasDAR' => $mascotas]); // Pasar la lista de mascotas a la vista
})->name('zonapublica');

// Ruta a la zona privada (solo usuarios autenticados)
Route::get('/zonaprivada', function () {
    $usuario = Auth::user(); // Obtener usuario autenticado
    $mascotas = $usuario->mascotas; // Obtener sus mascotas

    return view('principalPrivada', ['mascotasDAR' => $mascotas]); // Pasar las mascotas a la vista
})->middleware('auth')->name('zonaprivada');