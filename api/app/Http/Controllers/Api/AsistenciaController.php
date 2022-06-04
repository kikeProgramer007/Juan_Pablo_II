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
}
