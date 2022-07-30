<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Asistencia;
use App\Models\Estudiante;
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
            if (!is_numeric($rude)) {
                return [
                    'success' => false,
                    'message' => 'inserte un número',
                ];
            }
            $faltas=Asistencia::select(
                'asistencias.fecha',
                'asistencias.estado'
            )
            ->join('estudiantes','asistencias.id_estudiante','=','estudiantes.id')
            ->where('estudiantes.codigo_rude','=',$rude)->where('asistencias.estado','=','Falta')
            ->get();

            $estudiante = Estudiante::where("codigo_rude","=", $rude)->get()->first();
            if ($estudiante) {
                if (count($faltas) > 0) {//SI NO ESTA VACIO
                    return [
                        'success' => true,
                        'message' => 'Estudiante: '.$estudiante['nombre'].' '.$estudiante['apellido_paterno'].' '.$estudiante['apellido_materno'],
                         'data' => $faltas
                    ];
                }else{
                    return [
                        'success' => false,
                        'message' => 'Este estudiante  no tiene faltas',
                    ];
                }
            }else{
                return [
                    'success' => false,
                    'message' => 'Rude no existente',
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
