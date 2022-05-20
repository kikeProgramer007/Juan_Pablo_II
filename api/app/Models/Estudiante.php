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
        'fecha_nacimiento',
        'id_licencia',
        'id_asistencia'
    ];

    public $timestamps = false;

    public function licencia()
    {
        return $this->belongsTo(Licencia::class);
    }
    public function asistencia()
    {
        return $this->belongsTo(Asistencia::class);
    }

}
