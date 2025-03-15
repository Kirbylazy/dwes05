<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\MascotaDAR;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class DARSeeder extends Seeder
{
    public function run(): void
    {
        // Verifica si el usuario DAR1 no existe antes de crearlo
        if (User::where('name', 'DAR1')->count() == 0) {
            $user1 = User::create([
                'name' => 'DAR1',
                'email' => 'DAR1@email.DAR',
                'password' => Hash::make('DAR1'),
                'email_verified_at' => now()
            ]);
        } else {
            $user1 = User::where('name', 'DAR1')->first();
        }

        // Verificar y crear mascota pública para usuario DAR1
        if (MascotaDAR::where('nombre', 'MascotaPublicaDAR1')->where('user_id', $user1->id)->count() == 0) {
            $user1->mascotas()->create([
                'nombre' => 'MascotaPublicaDAR1',
                'descripcion' => 'Mascota pública simpática',
                'tipo' => 'Perro',
                'publica' => 'Si',
                'megusta' => 0
            ]);
        }

        // Verificar y crear mascota privada para usuario DAR1
        if (MascotaDAR::where('nombre', 'MascotaPrivadaDAR1')->where('user_id', $user1->id)->count() == 0) {
            $user1->mascotas()->create([
                'nombre' => 'MascotaPrivadaDAR1',
                'descripcion' => 'Mascota privada interesante',
                'tipo' => 'Gato',
                'publica' => 'No',
                'megusta' => 0
            ]);
        }

        // Verifica si el usuario DAR2 no existe antes de crearlo
        if (User::where('name', 'DAR2')->count() == 0) {
            $user2 = User::create([
                'name' => 'DAR2',
                'email' => 'DAR2@email.DAR',
                'password' => Hash::make('DAR2'),
                'email_verified_at' => now()
            ]);
        } else {
            $user2 = User::where('name', 'DAR2')->first();
        }

        // Verificar y crear mascota pública para usuario DAR2
        if (MascotaDAR::where('nombre', 'MascotaPublicaDAR2')->where('user_id', $user2->id)->count() == 0) {
            $user2->mascotas()->create([
                'nombre' => 'MascotaPublicaDAR2',
                'descripcion' => 'Mascota pública divertida',
                'tipo' => 'Gato',
                'publica' => 'Si',
                'megusta' => 0
            ]);
        }

        // Verificar y crear mascota privada para usuario DAR2
        if (MascotaDAR::where('nombre', 'MascotaPrivadaDAR2')->where('user_id', $user2->id)->count() == 0) {
            $user2->mascotas()->create([
                'nombre' => 'MascotaPrivadaDAR2',
                'descripcion' => 'Mascota privada y exclusiva',
                'tipo' => 'Dragón',
                'publica' => 'No',
                'megusta' => 0
            ]);
        }
    }
}


