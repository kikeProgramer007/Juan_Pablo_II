<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licencias', function (Blueprint $table) {
            $table->id();
            $table->string('asunto');
            $table->string('justificacion');
            $table->date('fecha');
            $table->tinyInteger('activo')->default('1');
            // Relacionando tablas capturando la llave primaria de estudiante
            $table->unsignedBigInteger('id_estudiante');
            $table->foreign('id_estudiante')->references('id')->on('estudiantes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('licencias');
    }
}
