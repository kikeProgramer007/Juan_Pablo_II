<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_materia','50');
            $table->string('docente','45');
            //RELACION UNO A MUCHOS(ROBANDO->materias)
            $table->unsignedBigInteger('id_curso')->nullable();//ACEPTA CAMPOS NULOS
            $table->foreign('id_curso')->references('id')->on('cursos')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materias');
    }
}
