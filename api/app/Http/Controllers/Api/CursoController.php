<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CursoController extends Controller
{

    public function index()
    {
        $estudiante = Curso::all();
        return response()->json($estudiante);
    }

    public function store(Request $request)
    {
        $rules=array(
            'grado'  =>"required|min:2|max:20",
            'nivel'  =>"required|min:2|max:20",
            'grupo' =>"required|max:1"
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
            $data = new Curso();
            $data->grado = $request->grado;
            $data->nivel = $request->nivel;
            $data->grupo = $request->grupo;
            $result = $data->save();

            if($result){
                return [
                    'success' => true,
                    'message' => 'Registro creado satisfatoriamente'
                ];
            }
            else{
                return [
                    'success' => false,
                    'message' => 'Error al guardar',
                ];
            }
        }
    }

    public function show($id)
    {
        $curso = Curso::find($id);
        return $curso;
    }

    public function update(Request $request, $id)
    {
        $rules=array(
            'grado'  =>"required|min:2|max:50",
            'nivel'  =>"required|min:2|max:50",
            'grupo' =>"required|max:1"
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
        $data = Curso::findOrFail($id);
        $data->grado = $request->grado;
        $data->nivel = $request->nivel;
        $data->grupo = $request->grupo;
        $result = $data->save();

        if($result){
            return [
                'success' => true,
                'message' => 'Registro Editado Satisfatoriamente'
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
        $result = Curso::destroy($id);

        if($result){
            return [
                'success' => true,
                'message' => 'Registro Eliminado'
            ];
        }
        else{
            return [
                'success' => false,
                'message' => 'Error',
            ];
        }
    }
}
