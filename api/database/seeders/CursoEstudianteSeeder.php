<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursoEstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('curso_estudiante')->insert([
            'id_curso' => '7',
            'id_estudiante' => '1',
            'gestion' => '2022'
        ]);
        DB::table('curso_estudiante')->insert([
            'id_curso' => '8',
            'id_estudiante' => '2',
            'gestion' => '2022'
        ]);
        DB::table('curso_estudiante')->insert([
            'id_curso' => '9',
            'id_estudiante' => '3',
            'gestion' => '2022'
        ]);
    }
}
