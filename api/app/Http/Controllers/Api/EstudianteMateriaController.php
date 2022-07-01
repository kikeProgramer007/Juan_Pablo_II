<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Estudiante;
use App\Models\EstudianteMateria;
use App\Models\Materia;
use Illuminate\Http\Request;


class EstudianteMateriaController extends Controller
{

    public function index()
    {
        //$estudiante = Estudiante::all();
        $estudiante = Estudiante::find(1); //TRAER EL ESTUDIAMTE CON ID 1
        $materia = Materia::find(2); //TRAE LA MATERIA COM ID 2
        return [$estudiante,$materia];
    }


    public function store(Request $request)
    {
        if ($request) {
            $query = trim($request->get('searchText'));
            $calzadoAlmacen=EstudianteMateria::select(
                'm.nombre_materia',
                'estudiante_materia.nota_primer_bimestre',
                'estudiante_materia.nota_segundo_bimestre',
                'estudiante_materia.nota_tercer_bimestre',
                'estudiante_materia.nota_cuarto_bimestre',
                'estudiante_materia.promedio_anual'
            )
            ->join('estudiantes e','e.id','=','estudiante_materia.id_estudiante')
            ->join('materia m','m.id','=','estudiante_materia.id_materia')
            ->where('e.codigo_rude','=',$query)
            ->orderBy('estudiante_materia.promedio_anual','asc')
            ->paginate(10);
        }else{

        }
    }


    public function show($rude)
    {
        if(is_numeric($rude)){
            $notas=EstudianteMateria::select(
                'materias.nombre_materia',
                'estudiante_materia.nota_primer_bimestre',
                'estudiante_materia.nota_segundo_bimestre',
                'estudiante_materia.nota_tercer_bimestre',
                'estudiante_materia.nota_cuarto_bimestre',
                'estudiante_materia.promedio_anual'
            )
            ->join('estudiantes','estudiante_materia.id_estudiante','=','estudiantes.id')
            ->join('materias','estudiante_materia.id_materia','=','materias.id')
            ->where('estudiantes.codigo_rude','=',$rude)
            ->orderBy('estudiante_materia.promedio_anual','asc')
            ->get(); //DEVUELDE TODOS LOS DATOS
            // ->paginate(20);
           
            //->toSql();  //DEVUELVE LA CONSULTA REALIZADA PERO EN COMANDOS
            if (count($notas) > 0) {//SI NO ESTA VACIO
                return $notas;
            }else{
                return [
                    'success' => false,
                    'message' => 'No hay regitros',
                ];
            }
        }else{
            return [
                'success' => false,
                'message' => 'inserte un número',
            ];
        }
 
    }

    public function mysubjects($rude){
        if(is_numeric($rude)){
            $materias=EstudianteMateria::select(
                'materias.nombre_materia',
                'materias.docente'
            )
            ->join('estudiantes','estudiante_materia.id_estudiante','=','estudiantes.id')
            ->join('materias','estudiante_materia.id_materia','=','materias.id')
            ->where('estudiantes.codigo_rude','=',$rude)
            ->orderBy('materias.nombre_materia','asc')->get(); 
            //DEVUELDE TODOS LOS DATOS
            //  ->paginate(20);
            //->toSql(); DEVUELVE LA CONSULTA REALIZADA PERO EN COMANDOS
            if (count($materias) > 0) {//SI NO ESTA VACIO
                return $materias;
            }else{
                return [
                    'success' => false,
                    'message' => 'No hay regitros',
                ];
            }
        }else{
            return [
                'success' => false,
                'message' => 'inserte un número',
            ];
        }
    }

    public function update(Request $request, $id)
    {
        //
    }



    public function destroy($id)
    {
        //
    }
}
