<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Models\MascotaDAR;
use App\Http\Controllers\MascotaControllerDAR;

//Ruta a la zona pública (simplemente accediendo a / vía GET)
Route::get('/', function () {
    $mascotas = MascotaDAR::where('publica', 'Si')->get(); // Obtener solo las mascotas públicas

    return view('principal', ['mascotasDAR' => $mascotas]); // Pasar la lista de mascotas a la vista
})->name('zonapublica');

// Ruta a la zona privada
Route::get('/zonaprivada', function () {
    if (!Auth::check()) {
        // Si no hay usuario autenticado, redirige al login
        return redirect()->route('formlogin');
    }

    $usuario = Auth::user(); // Obtener usuario autenticado
    $mascotas = $usuario->mascotas; // Obtener sus mascotas

    return view('privada.principal', ['mascotasDAR' => $mascotas]);
})->middleware('auth')->name('zonaprivada');

//Creamos una ruta nombrada (formlogin) tipo GET a '/login' que mostrará el formulario
Route::get('/login', [LoginController::class, 'mostrarFormularioLoginDAR'])->name('formlogin');
//Creamos una ruta nombrada (login) tipo POST a '/login' que procesará el formulario
Route::post('/login', [LoginController::class, 'loginDAR'])->name('login');
//Creamos una ruta nombrada (logout) tipo POST a '/logout' que cerrará la sesión
Route::get('/logout', [LoginController::class, 'logoutDAR'])->name('logout');
// Mostrar el formulario para crear una nueva mascota
Route::get('/mascota/nueva', [MascotaControllerDAR::class, 'mostrarFormulario'])
    ->middleware('auth')->name('formmascotaDAR');
// Guardar la nueva mascota en la base de datos
Route::post('/mascota/nueva', [MascotaControllerDAR::class, 'crearMascota'])
    ->middleware('auth')->name('nuevamascotaDAR');
// Eliminar una mascota
Route::delete('/mascota/eliminar/{id}', [MascotaControllerDAR::class, 'eliminarMascota'])
    ->middleware('auth')
    ->name('eliminarMascotaDAR');