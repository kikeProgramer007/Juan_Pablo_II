<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Asistencia;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{

    public function index()
    {
        $asistencia = Asistencia::all();
        return $asistencia;
    }

    public function store(Request $request)
    {
        $asistencia = new Asistencia();
        $asistencia->estado = $request->estado;
        $asistencia->fecha = $request->fecha;
        $asistencia->id_estudiante = $request->id_estudiante;

        $asistencia->save();
    }

    public function show($id)
    {
        $asistencia = Asistencia::find($id);
        return $asistencia;
    }

    public function update(Request $request, $id)
    {
        $asistencia = Asistencia::findOrFail($id);
        $asistencia->estado = $request->estado;
        $asistencia->fecha = $request->fecha;
        $asistencia->id_estudiante = $request->id_estudiante;

        $asistencia->save();
        return $asistencia;
    }

    public function destroy($id)
    {
        $asistencia = Asistencia::destroy($id);
        return $asistencia;
    }

    public function faltas($rude)
    {
      /*SELECT asistencias.fecha, asistencias.estado
        FROM `asistencias`
        INNER JOIN estudiantes ON asistencias.id_estudiante = estudiantes.id
        WHERE estudiantes.codigo_rude=12345
        AND asistencias.estado= 'Falta'*/

        if(($rude)){
            $faltas=Asistencia::select(
                'asistencias.fecha',
                'asistencias.estado'
            )
            ->join('estudiantes','asistencias.id_estudiante','=','estudiantes.id')
            ->where('estudiantes.codigo_rude','=',$rude)->where('asistencias.estado','=','Falta')
            ->get();
            //->get(); //DEVUELDE TODOS LOS DATOS
            //->toSql();  //DEVUELVE LA CONSULTA REALIZADA PERO EN COMANDOS
            if (count($faltas) > 0) {//SI NO ESTA VACIO
                return $faltas;
            }else{
                return [
                    'success' => false,
                    'message' => 'No hay regitros',
                ];
            }
        }else{
            return [
                'success' => false,
                'message' => 'inserte el nro rude',
            ];
        }
    }

}
