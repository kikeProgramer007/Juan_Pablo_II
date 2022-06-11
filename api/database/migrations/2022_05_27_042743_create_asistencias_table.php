<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencias', function (Blueprint $table) {
            $table->id();
            $table->string('estado',20);
            $table->date('fecha');
            //$table->tinyInteger('activo')->default('1');
            $table->unsignedBigInteger('id_estudiante');
            $table->unsignedBigInteger('id_licencia')->unique()->nullable();//EL NULLABLE ACEPTA VALORES NULOS
            // Relacionando tablas estudiantes capturando la llave primaria de asistencias
            $table->foreign('id_estudiante')->references('id')->on('estudiantes');
            //RELACION DE UNO A UNO ENTRE LICENCIA Y ASISTENCIA(ROBA ID)
            //->onDelete('cascade')->onUpdate('cascade'); PERMITE EDITAR Y ELIMINAR UNA REGISTRO QUE ESTARELACIONADO
            //$table->foreign('id_licencia')->references('id')->on('licencias')->onDelete('cascade')->onUpdate('cascade');
            //->onDelete('cascade')->onUpdate('cascade'); PERMITE EDITAR Y ELIMINAR UNA REGISTRO QUE ESTARELACIONADO
            $table->foreign('id_licencia')->references('id')->on('licencias')->onDelete('set null')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asistencias');
    }
}
