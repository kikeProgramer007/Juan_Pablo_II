<?php

use App\Http\Controllers\Api\AsistenciaController;
use App\Http\Controllers\Api\EstudianteController;
use App\Http\Controllers\Api\LicenciaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::controller(LicenciaController::class)->group(function (){
    Route::get('/licencias','index');
    Route::post('/licencia','store');
    Route::get('/licencia/{id}','show');
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