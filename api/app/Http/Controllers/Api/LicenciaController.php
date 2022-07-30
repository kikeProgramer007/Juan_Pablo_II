<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Estudiante;
use App\Models\Licencia;
use Hamcrest\Type\IsNumeric;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LicenciaController extends Controller
{
    public function index()
    {
        $licencia = Licencia::all();

        $licencia = Licencia::paginate(50);

        return response()->json($licencia);
    }

    public function store(Request $request)
    {

        $rules=array(
            'asunto'  =>"required|min:2|max:50",
            'justificacion'  =>"required|min:2|max:150",
            'fecha' =>"required|min:5|max:150",
            'id_estudiante' =>"required",
        );
        $validator=Validator::make($request->all(),$rules);
        if($validator->fails())
        {
            return [
                'success' => false,
                'message' => 'error',
                 $validator->errors()
            ];
        }
        else{
        $data = new Licencia();
        $data->asunto = $request->asunto;
        $data->justificacion = $request->justificacion;
        $data->fecha = $request->fecha;
        $data->id_estudiante = $request->id_estudiante;
        $result = $data->save();
        // $user_id = auth()->user()->id;
        if($result){
            return [
                'success' => true,
                'message' => 'success'
            ];
        }
        else{
            return [
                'success' => false,
                'message' => 'error',
            ];
        }
      }
        /*try {
            // $fileName = time().$request->file('foto')->getClienteOriginalName();
            // $path = $request->file('foto')->storeAs('uploads/estudiantes',$fileName);
            // $validar['foto']=$path;
            $response->save();
            return response()->json([
                'success' => true,
                'message' => 'success'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'error',
                'errors'=>$e->getMessage()
            ]);
        };*/

      /*  $licencia = new Licencia();
        $licencia->justificacion = $request->justificacion;
        $licencia->fecha = $request->fecha;
        $licencia->id_estudiante = $request->id_estudiante;
        $licencia->save();*/
    }

    public function show($id)
    {
        $licencia = Licencia::find($id);
        return $licencia;
    }

    public function update(Request $request, $id)
    {
        $rules=array(
            'justificacion'  =>"required|min:2|max:150",
            'fecha' =>"required|min:5|max:150",
            'id_estudiante' =>"required",
        );
        $validator=Validator::make($request->all(),$rules);
        if($validator->fails())
        {
            return [
                'success' => false,
                'message' => 'error',
                 $validator->errors()
            ];
        }
        else{
        $data = Licencia::findOrFail($id);
        $data->asunto = $request->asunto;
        $data->justificacion = $request->justificacion;
        $data->fecha = $request->fecha;
        $data->id_estudiante = $request->id_estudiante;
        $result = $data->save();

        if($result){
            return [
                'success' => true,
                'message' => 'success'
            ];
        }
        else{
            return [
                'success' => false,
                'message' => 'error',
            ];
        }
      }
    }

    public function destroy($id)
    {
        $result = Licencia::destroy($id);

        if($result){
            return [
                'success' => true,
                'message' => 'success'
            ];
        }
        else{
            return [
                'success' => false,
                'message' => 'error',
            ];
        }
    }

    public function registros($rude,$fecha)
    {
        if((isset($rude) && isset($fecha))){
            if (!is_numeric($rude)) {
                return response()->json([
                    'success' => false,
                    'message' => 'El rude debe ser númerico',
                ],404);
            }
            $licencia=Licencia::select(
                'licencias.id',
                'licencias.asunto',
                'licencias.justificacion',
                'licencias.fecha',
                'licencias.activo',
                'licencias.id_estudiante',
                'estudiantes.nombre',
                'estudiantes.apellido_paterno',
                'estudiantes.apellido_materno'
            )
            ->join('estudiantes','licencias.id_estudiante','=','estudiantes.id')
            ->where('estudiantes.codigo_rude','=',$rude)->where('estudiantes.fecha_nacimiento','=',$fecha)
            ->orderBy('licencias.fecha','desc')
            ->get(50);

            $estudiante = Estudiante::where("codigo_rude","=", $rude)->where("fecha_nacimiento","=", $fecha)->get()->first();
            if ($estudiante) {
                if (count($licencia) >0) {//SI NO ESTA VACIO
                    return [
                        'success' => true,
                        'message' => 'Estudiante: '.$estudiante['nombre'].' '.$estudiante['apellido_paterno'].' '.$estudiante['apellido_materno'],
                         'data' => $licencia
                    ];
                }else{
                    return [
                        'success' => true,
                        'message' => 'Este registro no tiene ninguna licencia',
                        'data' => $licencia
                    ];
                }

            }else{
                return [
                    'success' => false,
                    'message' => 'El Rude o la Fecha no coinciden',
                     'data' => $licencia
                ];
            }

        }else{
            return response()->json([
                'success' => false,
                'message' => 'ingreselos datos',
            ],404);
        }

    }

    public function guardar($rude, Request $request)
    {
        $rules=array(
            'asunto'  =>"required|min:2|max:50",
            'justificacion'  =>"required|min:2|max:150",
            'fecha' =>"required|min:5|max:150"
        );
        $validator=Validator::make($request->all(),$rules);
        if($validator->fails())
        {
            return [
                'success' => false,
                'message' => 'error',
                 $validator->errors()
            ];
        }
        else{
        $estudiante = Estudiante::where("codigo_rude","=", $rude)->get()->first();
        if ( $estudiante ) {
            $data = new Licencia();
            $data->asunto = $request->asunto;
            $data->justificacion = $request->justificacion;
            $data->fecha = $request->fecha;
            $data->id_estudiante =  $estudiante['id'];
            $result = $data->save();
            
            if($result){
                return [
                    'success' => true,
                    'message' => 'success'
                ];
            }
            else{
                return [
                    'success' => false,
                    'message' => 'error',
                ];
            }
        } else{
            return [
                'success' => false,
                'message' => 'error',
            ];
        }    
 
      }
    }

    public function actualizar($id_licencia, Request $request)
    {
        $rules=array(
            'asunto'  =>"required|min:2|max:30",
            'justificacion'  =>"required|min:2|max:150",
            'fecha' =>"required|min:5|max:150"
        );
        $validator=Validator::make($request->all(),$rules);
        if($validator->fails())
        {
            return [
                'success' => false,
                'message' => 'error',
                 $validator->errors()
            ];
        }
        else{
        $data = Licencia::findOrFail($id_licencia);
        $data->asunto = $request->asunto;
        $data->justificacion = $request->justificacion;
        $data->fecha = $request->fecha;
        $result = $data->save();

        if($result){
            return [
                'success' => true,
                'message' => 'success'
            ];
        }
        else{
            return [
                'success' => false,
                'message' => 'error',
            ];
        }
      }
    }


}
