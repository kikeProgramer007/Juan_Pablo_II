<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Licencia extends Model
{
    use HasFactory;
    protected $fillable = ['justificacion','fecha','activo'];

      // One To Many -Una Licencia puede tener uno o muchos estudiantes
      public function estudiantes()
      {
        return $this->hasMany(Estudiante::class);
      }
      
}
