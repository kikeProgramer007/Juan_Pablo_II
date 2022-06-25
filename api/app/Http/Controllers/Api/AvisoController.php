<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Aviso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AvisoController extends Controller
{
    public function index()
    {
        $avisos = Aviso::all();
        return response()->json($avisos);
    }

    public function store(Request $request)
    {
        $rules=array(
            'titulo'  =>"required|min:2|max:20",
            'descripcion'  =>"required|min:1|max:200",
            'fecha' =>"required",
            'autor' =>"required"
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
            $data = new Aviso();
            $data->titulo = $request->titulo;
            $data->descripcion = $request->descripcion;
            $data->fecha = $request->fecha;
            $data->autor = $request->autor;
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
        $curso = Aviso::find($id);
        return $curso;
    }

    public function update(Request $request, $id)
    {
        $rules=array(
            'titulo'  =>"required|min:2|max:20",
            'descripcion'  =>"required|min:1|max:200",
            'fecha' =>"required",
            'autor' =>"required"
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
        $data = Aviso::findOrFail($id);
        $data->titulo = $request->titulo;
        $data->descripcion = $request->descripcion;
        $data->fecha = $request->fecha;
        $data->autor = $request->autor;
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
        $result = Aviso::destroy($id);

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
