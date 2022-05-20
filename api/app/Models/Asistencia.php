<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    use HasFactory;
    protected $fillable = ['estado'];

    public $timestamps = false;

    public function estudiantes()
    {
      return $this->hasMany(Estudiante::class);
    }
}
