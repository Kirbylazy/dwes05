<?php

use App\Models\MascotaDAR;
use Illuminate\Support\Facades\Route;

// Ruta a la zona pública
Route::get('/', function () {
    $mascotas = MascotaDAR::where('publica', 'Si')->get(); // Obtener solo las mascotas públicas

    return view('principal', ['mascotasDAR' => $mascotas]); // Pasar la lista de mascotas a la vista
})->name('zonapublica');