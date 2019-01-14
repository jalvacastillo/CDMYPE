<?php

namespace App\Models\Servicios;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Accion extends Model
{
    use SoftDeletes;
    protected $table = 'servicio_acciones';
    protected $fillable = [
        'nombre',
        'descripcion',
        'servicio_id'
    ];

}