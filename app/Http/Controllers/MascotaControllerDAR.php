<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MascotaDAR;
use Illuminate\Support\Facades\Auth;

class MascotaControllerDAR extends Controller
{
    // Mostrar el formulario de creación
    public function mostrarFormulario()
    {
        return view('privada.formmascotaDAR');
    }

    // Guardar la nueva mascota en la base de datos
    public function crearMascota(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:50',
            'descripcion' => 'required|string|max:250',
            'tipo' => 'required|in:Perro,Gato,Pájaro,Dragón,Conejo,Hamster,Tortuga,Pez,Serpiente',
            'publica' => 'required|in:Si,No',
        ]);

        // Obtener el usuario autenticado
        $usuario = Auth::user();

        // Crear la mascota
        MascotaDAR::create([
            'user_id' => $usuario->id,
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'tipo' => $request->tipo,
            'publica' => $request->publica,
            'megusta' => 0
        ]);

        // Redirigir a la zona privada con un mensaje de éxito
        return redirect()->route('zonaprivada')->with('success', 'Mascota creada exitosamente.');
    }
}
