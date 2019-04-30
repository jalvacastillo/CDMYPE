<?php

namespace App\Models\Empresas;

use Illuminate\Database\Eloquent\Model;

class Accion extends Model {

    protected $table = 'empresa_acciones';
    protected $fillable = [
        'proyecto_id',
        'actividad',
        'responsable',
        'inicio',
        'fin',
        'completado'
    ];


    public function proyecto()
    {
        return $this->belongsTo('App\Models\Empresas\Proyecto','proyecto_id');
    }




}
