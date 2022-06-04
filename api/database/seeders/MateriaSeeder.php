<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materias')->insert([
            'id' => '1',
            'nombre_materia' => 'Matemáticas',
            'id_curso' => '3',
        ]);
        DB::table('materias')->insert([
            'id' => '2',
            'nombre_materia' => 'Ciencia Sociales',
            'id_curso' => '3',
        ]);
        DB::table('materias')->insert([
            'id' => '3',
            'nombre_materia' => 'Literatura',
            'id_curso' => '3',
        ]);
        DB::table('materias')->insert([
            'id' => '4',
            'nombre_materia' => 'Ingles',
            'id_curso' => '4',
        ]);
        DB::table('materias')->insert([
            'id' => '5',
            'nombre_materia' => 'Química',
            'id_curso' => '4',
        ]);
        DB::table('materias')->insert([
            'id' => '6',
            'nombre_materia' => 'Física',
            'id_curso' => '5',
        ]);
        DB::table('materias')->insert([
            'id' => '7',
            'nombre_materia' => 'Filosofia',
            'id_curso' => '5',
        ]);
        DB::table('materias')->insert([
            'id' => '8',
            'nombre_materia' => 'Psicología',
            'id_curso' => '6',
        ]);
        DB::table('materias')->insert([
            'id' => '9',
            'nombre_materia' => 'Lenguaje',
            'id_curso' => '6',
        ]);
        DB::table('materias')->insert([
            'id' => '10',
            'nombre_materia' => 'Historia',
            'id_curso' => '7',
        ]);
        DB::table('materias')->insert([
            'id' => '11',
            'nombre_materia' => 'Computación',
            'id_curso' => '7',
        ]);
        DB::table('materias')->insert([
            'id' => '12',
            'nombre_materia' => 'Música',
            'id_curso' => '8',
        ]);
        DB::table('materias')->insert([
            'id' => '13',
            'nombre_materia' => 'Religión',
            'id_curso' => '8',
        ]);
        DB::table('materias')->insert([
            'id' => '14',
            'nombre_materia' => 'Educacion Fisica',
            'id_curso' => '9',
        ]);
    }
}
