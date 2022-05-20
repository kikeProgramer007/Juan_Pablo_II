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
    {
        $estudiante = Estudiante::all();
        // $estudiante = Estudiante::getEstudiante->paginate(10);
        $estudiante = Estudiante::paginate(10);
        // $estudiante['mensaje'] ='suucess';

        // return $estudiante;
        return response()->json($estudiante);
    }

    public function store(Request $request)
    {
        $estudiante = new Estudiante();
        $estudiante->codigo_rude       = $request['codigo_rude'];
        $estudiante->cedula_identidad  = $request['cedula_identidad'];
        $estudiante->nombre            = $request['nombre'];
        $estudiante->apellido_paterno  = $request['apellido_paterno'];
        $estudiante->apellido_materno  = $request['apellido_materno'];
        $estudiante->genero            = $request['genero'];
        $estudiante->fecha_nacimiento  = $request['fecha_nacimiento'];
        $estudiante->id_licencia       = $request['id_licencia'];
        $estudiante->id_asistencia     = $request['id_asistencia'];
        $estudiante->save();
    }

    public function show($id)
    {
        $estudiante = Estudiante::find($id);
        return $estudiante;
    }

    public function update(Request $request, $id)
    {

        $estudiante = Estudiante::findOrFail($id);
    
        $estudiante->codigo_rude       = $request['codigo_rude'];
        $estudiante->cedula_identidad  = $request['cedula_identidad'];
        $estudiante->nombre            = $request['nombre'];
        $estudiante->apellido_paterno  = $request['apellido_paterno'];
        $estudiante->apellido_materno  = $request['apellido_materno'];
        $estudiante->genero            = $request['genero'];
        $estudiante->fecha_nacimiento  = $request['fecha_nacimiento'];
        $estudiante->id_licencia       = $request['id_licencia'];
        $estudiante->id_asistencia     = $request['id_asistencia'];

        $estudiante->save();
        return $estudiante;
    }

    public function destroy($id)
    {
        $estudiante = Estudiante::destroy($id);
        return $estudiante;
    }
}
