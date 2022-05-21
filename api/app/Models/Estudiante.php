<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo_rude',
        'cedula_identidad',
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'genero',
        'fecha_nacimiento'
    ];

    public $timestamps = false;

      // One To Many -Una Licencia puede tener uno o muchos estudiantes
      public function licencias()
      {
        return $this->hasMany(Licencia::class);
      }

      public function asistencias()
      {
        return $this->hasMany(Asistencia::class);
      }

}
