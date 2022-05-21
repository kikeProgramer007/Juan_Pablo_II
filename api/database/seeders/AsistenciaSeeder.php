<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AsistenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asistencias')->insert([
            'id' => '1',
            'estado' => 'Asiste',
            'id_estudiante' => 1
        ]);

        DB::table('asistencias')->insert([
            'id' => '2',
            'estado' => 'Falta',
            'id_estudiante' => 2
        ]);

        DB::table('asistencias')->insert([
            'id' => '3',
            'estado' => 'Licencia',
            'id_estudiante' => 3
        ]);

    }
}
