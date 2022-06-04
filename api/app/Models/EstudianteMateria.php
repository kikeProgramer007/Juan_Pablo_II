<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstudianteMateria extends Model
{
    use HasFactory;

    protected $table = 'estudiante_materia';
    protected $primaryKey ='id';
    protected $fillable = [
        'id_estudiante',
        'id_materia',
        'nota_primer_bimestre',
        'nota_segundo_bimestre',
        'nota_tercer_bimestre',
        'nota_cuarto_bimestre',
        'promedio_final'
    ];
    public $timestamps=false;
}
