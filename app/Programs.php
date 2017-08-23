<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programs extends Model
{
        protected $fillable = [
        'nombre_programa', 'tipo_programa', 'duracion',
    ];
}
