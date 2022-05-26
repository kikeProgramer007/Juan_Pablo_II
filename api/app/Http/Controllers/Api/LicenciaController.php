<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Licencia;
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
}
