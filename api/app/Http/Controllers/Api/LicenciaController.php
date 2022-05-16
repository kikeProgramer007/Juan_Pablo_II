<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Licencia;
use Illuminate\Http\Request;
use PharIo\Manifest\License;

class LicenciaController extends Controller
{
    public function index()
    {
        $licencia = Licencia::all();
        return $licencia;
    }

    public function store(Request $request)
    {
        $licencia = new Licencia();
        $licencia->justificacion = $request->justificacion;
        $licencia->fecha = $request->fecha;

        $licencia->save();
    }

    public function show($id)
    {
        $licencia = Licencia::find($id);
        return $licencia;
    }

    public function update(Request $request, $id)
    {
        $licencia = Licencia::findOrFail($id);
        $licencia->justificacion = $request->justificacion;
        $licencia->fecha = $request->fecha;

        $licencia->save();
        return $licencia;
    }

    public function destroy($id)
    {
        $licencia = Licencia::destroy($id);
        return $licencia;
    }
}
