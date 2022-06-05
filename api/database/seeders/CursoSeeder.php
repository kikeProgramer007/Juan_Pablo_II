<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('cursos')->insert([
            'id' => '1',
            'grado' => 'Primero',
            'nivel' => 'Primaria',
            'grupo' => 'A'
        ]);
        DB::table('cursos')->insert([
            'id' => '2',
            'grado' => 'Segundo',
            'nivel' => 'Primaria',
            'grupo' => 'A'
        ]);
        DB::table('cursos')->insert([
            'id' => '3',
            'grado' => 'Tercero',
            'nivel' => 'Primaria',
            'grupo' => 'A'
        ]);
        DB::table('cursos')->insert([
            'id' => '4',
            'grado' => 'Cuarto',
            'nivel' => 'Primaria',
            'grupo' => 'A'
        ]);
        DB::table('cursos')->insert([
            'id' => '5',
            'grado' => 'Quinto',
            'nivel' => 'Primaria',
            'grupo' => 'A'
        ]);
        DB::table('cursos')->insert([
            'id' => '6',
            'grado' => 'Sexto',
            'nivel' => 'Primaria',
            'grupo' => 'A'
        ]);
        DB::table('cursos')->insert([
            'id' => '7',
            'grado' => 'Primero',
            'nivel' => 'Secundaria',
            'grupo' => 'A'
        ]);
        DB::table('cursos')->insert([
            'id' => '8',
            'grado' => 'Segundo',
            'nivel' => 'Secundaria',
            'grupo' => 'A'
        ]);
        DB::table('cursos')->insert([
            'id' => '9',
            'grado' => 'Tercero',
            'nivel' => 'Secundaria',
            'grupo' => 'A'
        ]);
        DB::table('cursos')->insert([
            'id' => '10',
            'grado' => 'Cuarto',
            'nivel' => 'Secundaria',
            'grupo' => 'A'
        ]);
        DB::table('cursos')->insert([
            'id' => '11',
            'grado' => 'Quinto',
            'nivel' => 'Secundaria',
            'grupo' => 'A'
        ]);
        DB::table('cursos')->insert([
            'id' => '12',
            'grado' => 'Sexto',
            'nivel' => 'Secundaria',
            'grupo' => 'A'
        ]);
    }
}
