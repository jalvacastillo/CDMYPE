<?php

namespace App\Models\Cliente;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Accion extends Model {

    use SoftDeletes;
    protected $table = 'cliente_acciones';
    protected $fillable = [
        'proyecto_id',
        'actividad',
        'responsable',
        'inicio',
        'fin',
        'estado'
    ];


    public function proyecto()
    {
        return $this->belongsTo('App\Models\Cliente\Proyecto','proyecto_id');
    }




}
