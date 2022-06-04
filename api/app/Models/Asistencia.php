<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    use HasFactory;
    protected $fillable = ['estado','fecha','id_estudiante'];

    public $timestamps = false;


    public function estudiantes()
    {
        return $this->belongsTo(Estudiante::class);
    }
    //RELACION UNO A UNO INVERSA PARA QUE ASISTENCIA PUEDA ACCEDER A DATOS DE LICENCIA
    public function licencia()
    {
        return $this->belongsTo(Licencia::class);
    }
}
