<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     
        
        // \App\Models\User::factory(10)->create();
        $this->truncateTables([
            'estudiantes',
            'licencias',
            'asistencias',
            'users',
        ]);

        $this->call([
            EstudianteSeeder::class,
            LicenciaSeeder::class,
            AsistenciaSeeder::class,
            UserSeeder::class
        ]);
    }

    protected function truncateTables(array $tables){
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');//FORZAR EL VACIADO DE TABLAS Q TENGAS RECLACIONES
        
        foreach ($tables as $table) {
            DB::table($table)->truncate();//vaciar tablas
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');//ACTIVAR REBICION DE LLAVES PRIMARYS Y SECUNDARIAS
    }
}
