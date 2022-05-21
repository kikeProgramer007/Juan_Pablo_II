<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Licencia extends Model
{
    use HasFactory;
    protected $fillable = ['justificacion','fecha','activo','id_estudiante'];
    public $timestamps = false;
      public function estudiantes()
      {
          return $this->belongsTo(Estudiante::class);
      }
      
}
