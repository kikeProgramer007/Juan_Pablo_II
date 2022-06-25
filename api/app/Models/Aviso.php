<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aviso extends Model
{
    use HasFactory;

    protected $primaryKey ='id';
    protected $fillable = [
        'titulo',
        'descripcion',
        'fecha',
        'autor'
    ];

    public $timestamps = false;

}
