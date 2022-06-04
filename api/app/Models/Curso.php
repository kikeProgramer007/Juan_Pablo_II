<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'grado',
        'nivel',
        'grupo'
    ];
    
    public $timestamps = false;

    //RELACION UNO A MUCHOS CON MATERIA
    public function materias(){//MATERIAS (PLURAL) YA UN CURSO TIENE VARIAS MATERIAS
        return $this->hasMany('App\Models\Materia');
    }

    //RELACION MUCHOS A MUCHOS (ENTRE CURSO-ESTUDIATE)
    public function estudiantes(){
        return $this->belongsToMany('App\Models\Estudiante');
    }
}
