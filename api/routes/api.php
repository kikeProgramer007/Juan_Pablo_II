<?php

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