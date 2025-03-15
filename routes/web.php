<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

//Ruta a la zona pública (simplemente accediendo a / vía GET)
Route::get('/', function () {
    return view('principal');
})->name('zonapublica');

//Ruta a la zona privada (simplemente accediendo a /zonaprivada vía GET)
Route::get('/zonaprivada', function () {
    return view('privada.principal');
})->middleware('auth')->name('zonaprivada');

//Creamos una ruta nombrada (formlogin) tipo GET a '/login' que mostrará el formulario
Route::get('/login', [LoginController::class, 'mostrarFormularioLoginDAR'])->name('formlogin');
//Creamos una ruta nombrada (login) tipo POST a '/login' que procesará el formulario
Route::post('/login', [LoginController::class, 'loginDAR'])->name('login');
//Creamos una ruta nombrada (logout) tipo POST a '/logout' que cerrará la sesión
Route::get('/logout', [LoginController::class, 'logoutDAR'])->name('logout');