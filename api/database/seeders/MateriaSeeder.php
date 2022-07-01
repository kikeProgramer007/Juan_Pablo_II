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
            'docente' => 'Prof. Ronal Lopez Arias',
            'id_curso' => '3',
        ]);
        DB::table('materias')->insert([
            'id' => '2',
            'nombre_materia' => 'Ciencia Sociales',
            'docente' => 'Prof. Ana Fernadez Perez',
            'id_curso' => '3',
        ]);
        DB::table('materias')->insert([
            'id' => '3',
            'nombre_materia' => 'Literatura',
            'docente' => 'Prof. Jhovana Velasco Vaca',
            'id_curso' => '3',
        ]);
        DB::table('materias')->insert([
            'id' => '4',
            'nombre_materia' => 'Ingles',
            'docente' => 'Prof. Felipe Diaz Vela',
            'id_curso' => '4',
        ]);
        DB::table('materias')->insert([
            'id' => '5',
            'nombre_materia' => 'Química',
            'docente' => 'Prof. Fabiola Mendez Figueroa',
            'id_curso' => '4',
        ]);
        DB::table('materias')->insert([
            'id' => '6',
            'nombre_materia' => 'Física',
            'docente' => 'Prof. Vania Gonsalez Benigno',
            'id_curso' => '5',
        ]);
        DB::table('materias')->insert([
            'id' => '7',
            'nombre_materia' => 'Filosofia',
            'docente' => 'Prof. Viviana Meneces Soliz',
            'id_curso' => '5',
        ]);
        DB::table('materias')->insert([
            'id' => '8',
            'nombre_materia' => 'Psicología',
            'docente' => 'Prof. Enrique Segoviano Vidal',
            'id_curso' => '6',
        ]);
        DB::table('materias')->insert([
            'id' => '9',
            'nombre_materia' => 'Lenguaje',
            'docente' => 'Prof. Marco Antelo Choque',
            'id_curso' => '6',
        ]);
        DB::table('materias')->insert([
            'id' => '10',
            'nombre_materia' => 'Historia',
            'docente' => 'Prof. Paola Torrez Guerra',
            'id_curso' => '7',
        ]);
        DB::table('materias')->insert([
            'id' => '11',
            'nombre_materia' => 'Computación',
            'docente' => 'Prof. Vicente Hidalgo Manecho',
            'id_curso' => '7',
        ]);
        DB::table('materias')->insert([
            'id' => '12',
            'nombre_materia' => 'Música',
            'docente' => 'Prof. Celia Arias Torrico',
            'id_curso' => '8',
        ]);
        DB::table('materias')->insert([
            'id' => '13',
            'nombre_materia' => 'Religión',
            'docente' => 'Prof. Yessica Villca Calderon',
            'id_curso' => '8',
        ]);
        DB::table('materias')->insert([
            'id' => '14',
            'nombre_materia' => 'Educacion Fisica',
            'docente' => 'Prof. Herlinda Bustamente Navia',
            'id_curso' => '9',
        ]);
    }
}
