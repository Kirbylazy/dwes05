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
        $datosvalidados = $request->validate([
            'nombre' => 'required|string|min:4|max:50',
            'descripcion' => 'required|string|max:250',
            'publica' => 'required|string|in:Si,No',
            'tipo' => 'required|string|in:Perro,Gato,Pájaro,Dragón,Conejo,Hamster,Tortuga,Pez,Serpiente'
        ]);

        // Obtener el usuario autenticado
        $usuario = Auth::user();

        // Crear la mascota con los datos validados
        MascotaDAR::create([
            'user_id' => $usuario->id,
            'nombre' => $datosvalidados['nombre'],
            'descripcion' => $datosvalidados['descripcion'],
            'tipo' => $datosvalidados['tipo'],
            'publica' => $datosvalidados['publica'],
            'megusta' => 0
        ]);

        // Redirigir a la zona privada con un mensaje de éxito
        return redirect()->route('zonaprivada')->with('success', 'Mascota creada exitosamente.');
    }
}
