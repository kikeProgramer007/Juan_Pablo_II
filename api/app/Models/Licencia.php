<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Licencia extends Model
{
    use HasFactory;
    protected $table = "licencias";
    protected $fillable = ['asunto','justificacion','fecha','activo','id_estudiante'];
    public $timestamps = false;
      public function estudiantes()
      {
          return $this->belongsTo(Estudiante::class);
      }
    
    //UNO A UNO PARA USAR DATOS DE ASISTENCIA
    public function asistencia()
    {
        return $this->hasOne(Asistencia::class);
    }
}
