<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //AGREGAMOS ESTA LIBRERIA

class LicenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dt = new DateTime();
        $dt =  $dt->format('Y-m-d');

        DB::table('licencias')->insert([
            'id' => '1',
            'asunto' => 'Enfermedad',
            'justificacion' => 'Sin minguna licencia',
            'fecha' => $dt,
            'activo' => '0',
            'id_estudiante' => 1
        ]);
    }
}
