<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Materia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MateriaController extends Controller
{

    public function index()
    {
        $estudiante = Materia::all();
        // $estudiante = Estudiante::getEstudiante->paginate(10);
        return response()->json($estudiante);
    }

    public function store(Request $request)
    {
        $rules=array(
            'nombre_materia'  =>"required|min:2|max:50",
            'id_curso' =>"required",
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
            $data = new Materia();
            $data->nombre_materia = $request->nombre_materia;
            $data->id_curso = $request->id_curso;
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

    public function show($id)
    {
        $materia = Materia::find($id);
        return $materia;
    }

  
    public function update(Request $request, $id)
    {
        $rules=array(
            'nombre_materia'  =>"required|min:2|max:50",
            'id_curso' =>"required",
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
        $data = Materia::findOrFail($id);
        $data->nombre_materia = $request->nombre_materia;
        $data->id_curso = $request->id_curso;

        $result = $data->save();

        if($result){
            return [
                'success' => true,
                'message' => 'Datos Editados Satisfatoriamente'
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
        $result = Materia::destroy($id);

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
