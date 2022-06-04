<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre_materia',
        'id_curso'
    ];
    
    public $timestamps = false;

    //RELACION UNO A MUCHOS (INVERSA)
    public function materia(){
        return $this->belongsTo('App\Models\Curso');
    }


    //RELACION MUCHOS A MUCHOS (ENTRE ESTUDIATE-MATERIA)
    public function estudiantes(){
        return $this->belongsToMany(Estudiante::class,'estudiante_materia');
    }
}
