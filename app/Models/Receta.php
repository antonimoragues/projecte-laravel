<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    protected $table = 'recetas';

    protected $fillable = [
        'titulo',
        'descripcion',
        'imagen_path',
        'tiempo_minutos',
    ];
}
