<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class MascotaDAR extends Model
{
    use HasFactory;

    // Especificar explícitamente la tabla
    protected $table = 'mascotas';

    // Permitir asignación masiva en estos campos
    protected $fillable = [
        'user_id',
        'nombre',
        'descripcion',
        'tipo',
        'publica',
        'megusta'
    ];

    // Relación inversa N:1 (Mascota pertenece a un User)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
