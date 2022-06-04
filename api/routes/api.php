<?php

use App\Http\Controllers\Api\AsistenciaController;
use App\Http\Controllers\Api\CursoController;
use App\Http\Controllers\Api\EstudianteController;
use App\Http\Controllers\Api\EstudianteMateriaController;
use App\Http\Controllers\Api\LicenciaController;
use App\Http\Controllers\Api\MateriaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(CursoController::class)->group(function (){
    Route::get('/cursos','index');
    Route::post('/curso','store');
    Route::get('/curso/{id}','show');
    Route::post('/curso/{id}','update');
    Route::put('/curso/{id}','update');
    Route::delete('/curso/{id}','destroy');
});

Route::controller(MateriaController::class)->group(function (){
    Route::get('/materias','index');
    Route::post('/materia','store');
    Route::get('/materia/{id}','show');
    Route::post('/materia/{id}','update');
    Route::put('/materia/{id}','update');
    Route::delete('/materia/{id}','destroy');
});

Route::controller(LicenciaController::class)->group(function (){
    Route::get('/licencias','index');
    Route::post('/licencia','store');
    Route::get('/licencia/{id}','show');
    Route::post('/licencia/{id}','update');
    Route::put('/licencia/{id}','update');
    Route::delete('/licencia/{id}','destroy');
});

Route::controller(AsistenciaController::class)->group(function (){
    Route::get('/asistencias','index');
    Route::post('/asistencia','store');
    Route::get('/asistencia/{id}','show');
    Route::put('/asistencia/{id}','update');
    Route::delete('/asistencia/{id}','destroy');
});

Route::controller(EstudianteController::class)->group(function (){
    Route::get('/estudiantes','index');
    Route::post('/estudiante','store');
    Route::get('/estudiante/{id}','show');
    Route::put('/estudiante/{id}','update');
    Route::delete('/estudiante/{id}','destroy');
});

Route::controller(EstudianteMateriaController::class)->group(function (){
    Route::get('/notas','index');
    Route::get('/nota/{rude}','show');
    
    Route::post('/nota','store');
    Route::put('/nota/{id}','update');
    Route::delete('/nota/{id}','destroy');
});