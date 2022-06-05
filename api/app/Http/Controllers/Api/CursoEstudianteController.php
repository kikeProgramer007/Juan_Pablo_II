<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CursoEstudiante;
use Illuminate\Http\Request;

class CursoEstudianteController extends Controller
{

    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $grado, string $nivel)
    {
        if(($grado)){
            $alumnos=CursoEstudiante::select(
                'estudiantes.nombre',
                'estudiantes.apellido_paterno',
                'estudiantes.apellido_materno',
                'estudiantes.genero',
                'cursos.grado',
                'cursos.nivel',
                'cursos.grupo',
                'curso_estudiante.gestion'
            )
            ->join('estudiantes','curso_estudiante.id_estudiante','=','estudiantes.id')
            ->join('cursos','curso_estudiante.id_curso','=','cursos.id')
            ->where('cursos.grado','=',$grado)->where('cursos.nivel','=',$nivel)
            ->orderBy('estudiantes.apellido_paterno','asc')
            ->get();
            //->get(); //DEVUELDE TODOS LOS DATOS
            //->toSql();  //DEVUELVE LA CONSULTA REALIZADA PERO EN COMANDOS
            if (count($alumnos) > 0) {//SI NO ESTA VACIO
                return $alumnos;
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
