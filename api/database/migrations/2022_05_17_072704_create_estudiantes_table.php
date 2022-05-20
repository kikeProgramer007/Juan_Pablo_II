<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_rude',15)->unique();;
            $table->string('cedula_identidad',10)->unique();
            $table->string('nombre',30);
            $table->string('apellido_paterno',30);
            $table->string('apellido_materno',30);
            $table->char('genero',1);
            $table->date('fecha_nacimiento');
             // Relacionando tablas capturando la llave primaria de licencia
            $table->unsignedBigInteger('id_licencia');
            $table->unsignedBigInteger('id_asistencia');
 
            $table->foreign('id_licencia')->references('id')->on('licencias');
            // Relacionando tablas asisencias capturando la llave primaria de licencia
            $table->foreign('id_asistencia')->references('id')->on('asistencias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiantes');
    }
}
