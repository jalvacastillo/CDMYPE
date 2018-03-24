<?php

namespace App\Models\Pagina;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Resultado extends Model
{
    use SoftDeletes;
    protected $table = 'resultados';
    protected $fillable = [
        'nombre',
        'total',
        'cdmype_id'
    ];

}
