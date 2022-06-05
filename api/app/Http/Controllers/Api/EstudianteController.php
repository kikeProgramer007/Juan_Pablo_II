<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Estudiante;
use Illuminate\Support\Facades\Validator;  //LIBRERIA Q SE USA EL VALIDATOR
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EstudianteController extends Controller
{

    public function index()
    {   //$results = Project::all()->sortBy("name"); ASCENDENTE
        //$results = Project::all()->sortByDesc("name"); DESENDENTE
        // $data['data']=  Estudiante::orderBy('apellido_paterno','asc')->get();
        
        $data = Estudiante::orderBy('apellido_paterno','asc')->get();
   
        // return response()->json($data, 200, []);
         return response()->json($data);
   
    }

    public function store(Request $request)
    {
       /* $validar = $request->validate([
            'codigo_rude'=> 'required|numeric',
            'cedula_identidad'=> 'required|numeric',
            'nombre'=> 'required',
            'apellido_paterno'=> 'required',
            'apellido_materno'=> 'required',
            'genero'=> 'required',
            'fecha_nacimiento'=> 'required',
            'id_licencia'=> 'required',
            'id_asistencia'=> 'required',
        ]);
        try {
            $fileName = time().$request->file('foto')->getClienteOriginalName();
            $path = $request->file('foto')->storeAs('uploads/estudiantes',$fileName);
            $validar['foto']=$path;
            $response = Estudiante::created($validar);
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

        $estudiante = new Estudiante();
        $estudiante->codigo_rude       = $request['codigo_rude'];
        $estudiante->cedula_identidad  = $request['cedula_identidad'];
        $estudiante->nombre            = $request['nombre'];
        $estudiante->apellido_paterno  = $request['apellido_paterno'];
        $estudiante->apellido_materno  = $request['apellido_materno'];
        $estudiante->genero            = $request['genero'];
        $estudiante->fecha_nacimiento  = $request['fecha_nacimiento'];
        $estudiante->save();
    }


    public function show($id)
    {
        $estudiante = Estudiante::find($id);
        return $estudiante;
    }

    public function update(Request $request, $id)
    {

/*
        $validar = $request->validate([
            'codigo_rude'=> 'required|numeric',
            'cedula_identidad'=> 'required|numeric',
            'nombre'=> 'required',
            'apellido_paterno'=> 'required',
            'apellido_materno'=> 'required',
            'genero'=> 'required',
            'fecha_nacimiento'=> 'required',
            'id_licencia'=> 'required',
            'id_asistencia'=> 'required',
        ]);
        try {

            if ($request->file('foto')) {
                $fileName = time().$request->file('foto')->getClienteOriginalName();
                $path = $request->file('foto')->storeAs('uploads/estudiantes',$fileName);
                $validar['foto']=$path;
            }

            $response = Estudiante::findOrFail($id);
            $response->update($validar);

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

        $estudiante = Estudiante::findOrFail($id);
    
        $estudiante->codigo_rude       = $request['codigo_rude'];
        $estudiante->cedula_identidad  = $request['cedula_identidad'];
        $estudiante->nombre            = $request['nombre'];
        $estudiante->apellido_paterno  = $request['apellido_paterno'];
        $estudiante->apellido_materno  = $request['apellido_materno'];
        $estudiante->genero            = $request['genero'];
        $estudiante->fecha_nacimiento  = $request['fecha_nacimiento'];

        $estudiante->save();
        return $estudiante;
    }

    public function destroy($id)
    {

        try {
            $estudiante = Estudiante::destroy($id);
            return response()->json([
                'success' => true,
                'message' => 'success'
            ]);

        } catch (\Throwable $th) {
           return response()->json([
            'success' => false,
            'message' => 'error',
            'errors' => $th->getMessage()
           ]);
        }

       
    }
}
