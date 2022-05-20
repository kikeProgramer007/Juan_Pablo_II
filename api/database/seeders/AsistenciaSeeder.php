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
            'estado' => 'Asiste'
        ]);

        DB::table('asistencias')->insert([
            'id' => '2',
            'estado' => 'Falta'
        ]);

        DB::table('asistencias')->insert([
            'id' => '3',
            'estado' => 'Licencia'
        ]);

    }
}
