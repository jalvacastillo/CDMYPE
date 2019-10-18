<?php

namespace App\Models\Coordinaciones;

use Illuminate\Database\Eloquent\Model;

class Coordinacion extends Model {

    protected $table = 'coordinacion';
    protected $fillable = [
        'tema',
        'descripcion',
        'institucion',
        'introduccion',
        'tipo',
        'img',
        'fecha'
    ];
    
}