<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //AGREGAMOS ESTA LIBRERIA


class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /* DB::statement('SET FOREIGN_KEY_CHECKS = 0');//FORZAR EL VACIADO DE TABLAS Q TENGAS RECLACIONES
        DB::table('estudiantes')->truncate();//vaciar tablas
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');*/

        DB::table('estudiantes')->insert([
            'codigo_rude' => '12123123321',
            'cedula_identidad' => '12321312',
            'nombre' => 'Enrique',
            'apellido_paterno' => 'Condori',
            'apellido_materno' => 'Quispe',
            'genero' => 'M',
            'fecha_nacimiento' => '1996-09-25',
            'id_licencia' => 1,
            'id_asistencia' => 1,
        ]);

        DB::table('estudiantes')->insert([
            'codigo_rude' => '12213123123',
            'cedula_identidad' => '123212',
            'nombre' => 'Ana',
            'apellido_paterno' => 'Vaca',
            'apellido_materno' => 'Toro',
            'genero' => 'F',
            'fecha_nacimiento' => '1999-09-25',
            'id_licencia' => 1,
            'id_asistencia' => 1,
        ]);

    }
}
