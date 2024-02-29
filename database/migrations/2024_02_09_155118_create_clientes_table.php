<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id('id');
            $table->integer("Identificacion");
            $table->string('Nombre');
            $table->string('Apellido');
            $table->date('Fecha_nacimiento');
            $table->double('Telefono',);
            $table->string('Correo_electrico');
            $table->date('Fecha_inscripcion');
            $table->timestamps();
            $table->softDeletes();
            
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
////$table->string('Nombre');
///$table->string('Apellido');
//$table->date('Fecha_nacimiento');
//$table->double('Telefono',);
//$table->string('Correo_electrico');
//$table->date('Fecha_inscripcion');////