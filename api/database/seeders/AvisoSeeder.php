<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AvisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('avisos')->insert([
            'titulo' => 'Comunicado',
            'descripcion' => 'Queridos estudiantes se les comunica que a partir de la próxima semana 17-04-2022 inician las vacasiones de verano. Por favor tomar en cuenta.',
            'fecha' => '2022-04-10',
            'autor' => 'Dra. Amanda Alcidez Espinosa'
        ]);
        DB::table('avisos')->insert([
            'titulo' => 'Comunicado académico',
            'descripcion' => 'Queridos estudiantes se les comunica que el horario de invierno estará vigente a partir del 25-04-2022. Por favor, tomar nota',
            'fecha' => '2022-04-19',
            'autor' => 'Dra. Amanda Alcidez Espinosa'
        ]);
    }
}
