<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaMascotaVirtualDAR extends Migration
{
    public function up()
    {
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id();

            // Relación con usuario
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            // Columnas solicitadas
            $table->string('nombre', 50);
            $table->string('descripcion', 250);
            $table->enum('tipo', ['Perro', 'Gato', 'Pájaro', 'Dragón', 'Conejo', 'Hamster', 'Tortuga', 'Pez', 'Serpiente']);
            $table->enum('publica', ['Si', 'No']);
            $table->unsignedInteger('megusta')->default(0);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mascotas');
    }
}
