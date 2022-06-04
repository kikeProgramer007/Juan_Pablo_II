<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursoEstudianteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso_estudiante', function (Blueprint $table) {
            $table->id();
            //RELACION MUCHOS A MUCHOS (TABLA INTERMEDIA ROBA A CURSOS Y ESTUDIANTES)
            $table->unsignedBigInteger('id_curso');
            $table->unsignedBigInteger('id_estudiante');
            $table->string('gestion',4);
            $table->foreign('id_curso')->references('id')->on('cursos')->onDelete('cascade');
            $table->foreign('id_estudiante')->references('id')->on('estudiantes')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curso_estudiante');
    }
}
