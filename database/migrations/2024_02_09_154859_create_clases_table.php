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
        Schema::create('clases', function (Blueprint $table) {
            $table->id('id');
            $table->string('Nombre_clase');
            $table->time('Horario');
            $table->string('Instructor');
            $table->timestamps();
            $table->softDeletes();

           /// $table->foreing('ID_clase')->references('ID')->on('clase');
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clases');
    }
};
///$table->string('Nombre_clase');
         ///   $table->time('Horario');
         ///  $table->string('Instructor');
         ///   $table->double('Capacidad_maxima');
          ///  $table->timestamps();

           /// $table->foreing('ID_clase')->references('ID')->on('clase');