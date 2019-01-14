<?php

namespace App\Models\Pagina;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Equipo extends Model
{
    use SoftDeletes;
    protected $table = 'equipo';
    protected $fillable = [
        'nombre',
        'tipo',
        'categoria',
        'cargo',
        'titulo',
        'descripcion',
        'url_facebook',
        'url_twitter',
        'url_linkedin',
        'avatar',
        'web',
    ];

}
