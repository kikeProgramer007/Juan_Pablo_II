<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudianteMateriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiante_materia', function (Blueprint $table) {
            $table->id();
            //RELACION MUCHOS A MUCHOS (TABLA INTERMEDIA)
            $table->foreignId('id_estudiante')->nullable()->constrained('estudiantes')->cascadeOnUpdate()->nullOnDelete();
            $table->foreignId('id_materia')->nullable()->constrained('materias')->cascadeOnUpdate()->nullOnDelete();
            $table->float('nota_primer_bimestre',8,2);
            $table->float('nota_segundo_bimestre',8,2);
            $table->float('nota_tercer_bimestre',8,2);
            $table->float('nota_cuarto_bimestre',8,2);
            $table->float('promedio_anual',8,2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiante_materia');
    }
}
