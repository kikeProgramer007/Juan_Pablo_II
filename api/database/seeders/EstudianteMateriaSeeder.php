<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstudianteMateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estudiante_materia')->insert([
            'id_estudiante' => '1',
            'id_materia' => '2',
            'nota_primer_bimestre' => '100',
            'nota_segundo_bimestre' => '100',
            'nota_tercer_bimestre' => '100',
            'nota_cuarto_bimestre' => '100',
            'promedio_anual' => '100'
        ]);
        DB::table('estudiante_materia')->insert([
            'id_estudiante' => '1',
            'id_materia' => '3',
            'nota_primer_bimestre' => '100',
            'nota_segundo_bimestre' => '100',
            'nota_tercer_bimestre' => '100',
            'nota_cuarto_bimestre' => '100',
            'promedio_anual' => '100'
        ]);
        DB::table('estudiante_materia')->insert([
            'id_estudiante' => '1',
            'id_materia' => '4',
            'nota_primer_bimestre' => '80',
            'nota_segundo_bimestre' => '80',
            'nota_tercer_bimestre' => '80',
            'nota_cuarto_bimestre' => '80',
            'promedio_anual' => '80'
        ]);
        DB::table('estudiante_materia')->insert([
            'id_estudiante' => '1',
            'id_materia' => '5',
            'nota_primer_bimestre' => '60',
            'nota_segundo_bimestre' => '60',
            'nota_tercer_bimestre' => '60',
            'nota_cuarto_bimestre' => '60',
            'promedio_anual' => '60'
        ]);
    }
}
