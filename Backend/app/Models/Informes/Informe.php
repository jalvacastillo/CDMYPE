<?php

namespace App\Models\Informes;

use Illuminate\Database\Eloquent\Model;

class Informe extends Model {

    protected $table = 'informe';
    protected $fillable = [
        'titulo',
        'periodo_inicio',
        'periodo_fin',
        'introduccion',
        'objetivo',
        'conclusion',
        'recomendacion'
    ];
    
}

