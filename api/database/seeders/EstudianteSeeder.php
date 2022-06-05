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
            'codigo_rude' => '123456',
            'cedula_identidad' => '12321312',
            'nombre' => 'Enrique',
            'apellido_paterno' => 'Condori',
            'apellido_materno' => 'Quispe',
            'genero' => 'M',
            'fecha_nacimiento' => '1996-09-25'
        ]);

        DB::table('estudiantes')->insert([
            'codigo_rude' => '12345',
            'cedula_identidad' => '123212',
            'nombre' => 'Ana',
            'apellido_paterno' => 'Vaca',
            'apellido_materno' => 'Toro',
            'genero' => 'F',
            'fecha_nacimiento' => '1999-09-25'
        ]);

        DB::table('estudiantes')->insert([
            'codigo_rude' => '10000',
            'cedula_identidad' => '21322122',
            'nombre' => 'Felicitas',
            'apellido_paterno' => 'Martinexz',
            'apellido_materno' => 'Mendez',
            'genero' => 'F',
            'fecha_nacimiento' => '2009-09-01'
        ]);

        DB::table('estudiantes')->insert([
            'codigo_rude' => '111',
            'cedula_identidad' => '123411',
            'nombre' => 'Ana',
            'apellido_paterno' => 'Venegas',
            'apellido_materno' => 'Arias',
            'genero' => 'F',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '222',
            'cedula_identidad' => '2324445',
            'nombre' => 'Elian',
            'apellido_paterno' => 'Lopez',
            'apellido_materno' => 'Villamonte',
            'genero' => 'M',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '333',
            'cedula_identidad' => '222222',
            'nombre' => 'Armando',
            'apellido_paterno' => 'Panieagua',
            'apellido_materno' => 'Fernandez',
            'genero' => 'M',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '444',
            'cedula_identidad' => '33333333',
            'nombre' => 'Edgar',
            'apellido_paterno' => 'Belen',
            'apellido_materno' => 'Diaz',
            'genero' => 'M',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '555',
            'cedula_identidad' => '4444444',
            'nombre' => 'Eduardo',
            'apellido_paterno' => 'Durán',
            'apellido_materno' => 'Franz',
            'genero' => 'M',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '666',
            'cedula_identidad' => '5555555',
            'nombre' => 'Erika',
            'apellido_paterno' => 'Barnades',
            'apellido_materno' => 'Barba',
            'genero' => 'F',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '777',
            'cedula_identidad' => '66666666',
            'nombre' => 'Paola',
            'apellido_paterno' => 'Guzman',
            'apellido_materno' => 'Villa',
            'genero' => 'F',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '888',
            'cedula_identidad' => '7777777',
            'nombre' => 'Mateo',
            'apellido_paterno' => 'Aries',
            'apellido_materno' => 'Zalazar',
            'genero' => 'M',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        //////////////////////////////////
        DB::table('estudiantes')->insert([
            'codigo_rude' => '999',
            'cedula_identidad' => '3289292',
            'nombre' => 'Jerson',
            'apellido_paterno' => 'Camacho',
            'apellido_materno' => 'Vásquez',
            'genero' => 'M',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '1111',
            'cedula_identidad' => '33003032',
            'nombre' => 'Gabi',
            'apellido_paterno' => 'Paco',
            'apellido_materno' => 'Higuera',
            'genero' => 'F',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '2222',
            'cedula_identidad' => '6063030',
            'nombre' => 'Vicente',
            'apellido_paterno' => 'Galán',
            'apellido_materno' => 'Montan',
            'genero' => 'M',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '3333',
            'cedula_identidad' => '80803232',
            'nombre' => 'Olga',
            'apellido_paterno' => 'Diaz',
            'apellido_materno' => 'Mezza',
            'genero' => 'F',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '4444',
            'cedula_identidad' => '9847023',
            'nombre' => 'Daniela',
            'apellido_paterno' => 'Quispe',
            'apellido_materno' => 'Chura',
            'genero' => 'F',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '5555',
            'cedula_identidad' => '3000299',
            'nombre' => 'Neymar',
            'apellido_paterno' => 'Flores',
            'apellido_materno' => 'Guitierrez',
            'genero' => 'M',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '6666',
            'cedula_identidad' => '7874002',
            'nombre' => 'Matías',
            'apellido_paterno' => 'Rojas',
            'apellido_materno' => 'Avendaño',
            'genero' => 'M',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '7777',
            'cedula_identidad' => '909930',
            'nombre' => 'Axel',
            'apellido_paterno' => 'Sayale',
            'apellido_materno' => 'Vaca',
            'genero' => 'M',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '8888',
            'cedula_identidad' => '70770072',
            'nombre' => 'Noemi',
            'apellido_paterno' => 'Calderón',
            'apellido_materno' => 'Zevallos',
            'genero' => 'F',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '9999',
            'cedula_identidad' => '60606603',
            'nombre' => 'Leocadia',
            'apellido_paterno' => 'Montero',
            'apellido_materno' => 'Vargas',
            'genero' => 'F',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '11111',
            'cedula_identidad' => '90505052',
            'nombre' => 'Bethy',
            'apellido_paterno' => 'Choque',
            'apellido_materno' => 'Ticona',
            'genero' => 'F',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '22222',
            'cedula_identidad' => '890024',
            'nombre' => 'Wilson',
            'apellido_paterno' => 'Montealegre',
            'apellido_materno' => 'Churata',
            'genero' => 'M',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '33333',
            'cedula_identidad' => '8702342',
            'nombre' => 'Francisco',
            'apellido_paterno' => 'Llave',
            'apellido_materno' => 'Malue',
            'genero' => 'M',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '44444',
            'cedula_identidad' => '90988903',
            'nombre' => 'Pablo',
            'apellido_paterno' => 'Justiniano',
            'apellido_materno' => 'Churqui',
            'genero' => 'M',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '55555',
            'cedula_identidad' => '9098903',
            'nombre' => 'Hernan',
            'apellido_paterno' => 'Aguilera',
            'apellido_materno' => 'Espinoza',
            'genero' => 'M',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '66666',
            'cedula_identidad' => '2510083',
            'nombre' => 'Israel',
            'apellido_paterno' => 'Rivero',
            'apellido_materno' => 'Paravicini',
            'genero' => 'M',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '77777',
            'cedula_identidad' => '2223330',
            'nombre' => 'Susana',
            'apellido_paterno' => 'Claros',
            'apellido_materno' => 'Quiruchi',
            'genero' => 'F',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '88888',
            'cedula_identidad' => '3333330',
            'nombre' => 'Camila',
            'apellido_paterno' => 'Olguin',
            'apellido_materno' => 'Villanueva',
            'genero' => 'F',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '99999',
            'cedula_identidad' => '7007333',
            'nombre' => 'Brenda',
            'apellido_paterno' => 'Morales',
            'apellido_materno' => 'Villca',
            'genero' => 'F',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '113111',
            'cedula_identidad' => '809932',
            'nombre' => 'Mara',
            'apellido_paterno' => 'Cespedes',
            'apellido_materno' => 'Mantilla',
            'genero' => 'F',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '111131',
            'cedula_identidad' => '8953400',
            'nombre' => 'Milenka',
            'apellido_paterno' => 'Arenas',
            'apellido_materno' => 'Soliz',
            'genero' => 'F',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '222222',
            'cedula_identidad' => '8742223',
            'nombre' => 'Juan',
            'apellido_paterno' => 'Fernandez',
            'apellido_materno' => 'Jahuira',
            'genero' => 'M',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '333333',
            'cedula_identidad' => '99330220',
            'nombre' => 'Alejandra',
            'apellido_paterno' => 'Gonzales',
            'apellido_materno' => 'Fernandez',
            'genero' => 'F',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '444444',
            'cedula_identidad' => '230923',
            'nombre' => 'Alfredo',
            'apellido_paterno' => 'Chalco',
            'apellido_materno' => 'Mercado',
            'genero' => 'M',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '555555',
            'cedula_identidad' => '3070043',
            'nombre' => 'Elías',
            'apellido_paterno' => 'Alaro',
            'apellido_materno' => 'Chasqui',
            'genero' => 'M',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '666666',
            'cedula_identidad' => '8574203',
            'nombre' => 'Tomas',
            'apellido_paterno' => 'Alave',
            'apellido_materno' => 'Montaño',
            'genero' => 'M',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '777777',
            'cedula_identidad' => '1241212',
            'nombre' => 'Walter',
            'apellido_paterno' => 'Alave',
            'apellido_materno' => 'Rios',
            'genero' => 'M',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '888888',
            'cedula_identidad' => '32300311',
            'nombre' => 'Henry',
            'apellido_paterno' => 'Callapa',
            'apellido_materno' => 'Mamani',
            'genero' => 'M',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '999999',
            'cedula_identidad' => '2312895',
            'nombre' => 'Marisol',
            'apellido_paterno' => 'Mendez',
            'apellido_materno' => 'Peña',
            'genero' => 'F',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '1111111',
            'cedula_identidad' => '4806112',
            'nombre' => 'Antonella',
            'apellido_paterno' => 'Calle',
            'apellido_materno' => 'Rojas',
            'genero' => 'F',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '2222222',
            'cedula_identidad' => '203042',
            'nombre' => 'Fabricio',
            'apellido_paterno' => 'Rojas',
            'apellido_materno' => 'Chirinos',
            'genero' => 'M',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '3333333',
            'cedula_identidad' => '3300321',
            'nombre' => 'Hugo',
            'apellido_paterno' => 'Trujillo',
            'apellido_materno' => 'Canaviri',
            'genero' => 'M',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '4444444',
            'cedula_identidad' => '9900552',
            'nombre' => 'Génesis',
            'apellido_paterno' => 'Salvatierra',
            'apellido_materno' => 'Choquerana',
            'genero' => 'F',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '5555555',
            'cedula_identidad' => '3004950',
            'nombre' => 'Fernando',
            'apellido_paterno' => 'Rodriguez',
            'apellido_materno' => 'Mendoza',
            'genero' => 'M',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '6666666',
            'cedula_identidad' => '7772777',
            'nombre' => 'Mariela',
            'apellido_paterno' => 'Obando',
            'apellido_materno' => 'Beltrán',
            'genero' => 'F',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '7777277',
            'cedula_identidad' => '90322',
            'nombre' => 'Laura',
            'apellido_paterno' => 'Paxi',
            'apellido_materno' => 'Peca',
            'genero' => 'F',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '8888888',
            'cedula_identidad' => '555330',
            'nombre' => 'Felipe',
            'apellido_paterno' => 'Garcia',
            'apellido_materno' => 'Huaylla',
            'genero' => 'M',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '9999999',
            'cedula_identidad' => '334422',
            'nombre' => 'Moises',
            'apellido_paterno' => 'Ramos',
            'apellido_materno' => 'Ávila',
            'genero' => 'M',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '11111111',
            'cedula_identidad' => '11223344',
            'nombre' => 'Patricia',
            'apellido_paterno' => 'Almanza',
            'apellido_materno' => 'Navarro',
            'genero' => 'F',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '22222222',
            'cedula_identidad' => '2233220',
            'nombre' => 'Yobana',
            'apellido_paterno' => 'Apaza',
            'apellido_materno' => 'Colque',
            'genero' => 'F',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '23222222',
            'cedula_identidad' => '3330002',
            'nombre' => 'David',
            'apellido_paterno' => 'Jahnsen',
            'apellido_materno' => 'Muñoz',
            'genero' => 'M',
            'fecha_nacimiento' => '2009-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '33333333',
            'cedula_identidad' => '4242300',
            'nombre' => 'Irene',
            'apellido_paterno' => 'Borras',
            'apellido_materno' => 'Saavedra',
            'genero' => 'F',
            'fecha_nacimiento' => '2008-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '44444444',
            'cedula_identidad' => '23467424',
            'nombre' => 'Pedro',
            'apellido_paterno' => 'Delgado',
            'apellido_materno' => 'Altamirano',
            'genero' => 'M',
            'fecha_nacimiento' => '2006-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '55555555',
            'cedula_identidad' => '2073232',
            'nombre' => 'Isabel',
            'apellido_paterno' => 'Arias',
            'apellido_materno' => 'Mollericona',
            'genero' => 'F',
            'fecha_nacimiento' => '2006-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '66666666',
            'cedula_identidad' => '23516840',
            'nombre' => 'Hernan',
            'apellido_paterno' => 'Kajeique',
            'apellido_materno' => 'Velasquez',
            'genero' => 'M',
            'fecha_nacimiento' => '2006-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '77777777',
            'cedula_identidad' => '1209802',
            'nombre' => 'Samuel',
            'apellido_paterno' => 'Mayta',
            'apellido_materno' => 'Coa',
            'genero' => 'M',
            'fecha_nacimiento' => '2003-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '88888888',
            'cedula_identidad' => '30052',
            'nombre' => 'Luisa',
            'apellido_paterno' => 'Leañoz',
            'apellido_materno' => 'Pava',
            'genero' => 'F',
            'fecha_nacimiento' => '2006-04-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '99999999',
            'cedula_identidad' => '443279',
            'nombre' => 'Ruben',
            'apellido_paterno' => 'Castro',
            'apellido_materno' => 'Torres',
            'genero' => 'M',
            'fecha_nacimiento' => '2005-03-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '111111111',
            'cedula_identidad' => '87873',
            'nombre' => 'Rosa',
            'apellido_paterno' => 'Villanueva',
            'apellido_materno' => 'Cossio',
            'genero' => 'F',
            'fecha_nacimiento' => '2005-03-11'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '222222222',
            'cedula_identidad' => '665454',
            'nombre' => 'Andrea',
            'apellido_paterno' => 'Moreno',
            'apellido_materno' => 'Delgado',
            'genero' => 'F',
            'fecha_nacimiento' => '2004-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '333333333',
            'cedula_identidad' => '43553',
            'nombre' => 'Percy',
            'apellido_paterno' => 'Sanchez',
            'apellido_materno' => 'Condori',
            'genero' => 'M',
            'fecha_nacimiento' => '2003-09-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '444444444',
            'cedula_identidad' => '23321',
            'nombre' => 'Nelly',
            'apellido_paterno' => 'Rollano',
            'apellido_materno' => 'Ochoa',
            'genero' => 'F',
            'fecha_nacimiento' => '2004-02-01'
        ]);
        DB::table('estudiantes')->insert([
            'codigo_rude' => '555555555',
            'cedula_identidad' => '1232122',
            'nombre' => 'Nestor',
            'apellido_paterno' => 'Melgar',
            'apellido_materno' => 'Rosales',
            'genero' => 'M',
            'fecha_nacimiento' => '2009-02-01'
        ]);




    }
}
