<?php

namespace App\Models\Empresas;

use Illuminate\Database\Eloquent\Model;

class Accion extends Model {

    protected $table = 'empresa_acciones';
    protected $fillable = [
        'proyecto_id',
        'actividad',
        'responsable',
        'categoria',
        'fin',
        'completado'
    ];

    protected $appends = ['tipo'];

    public function getCompletadoAttribute($value){
        return $value == 1 ? true : false;
    }

    public function getTipoAttribute(){
        return $this->proyecto()->first() ? $this->proyecto()->first()->asesor()->first()->cargo : null;
    }

    public function proyecto()
    {
        return $this->belongsTo('App\Models\Empresas\Proyecto','proyecto_id');
    }

    public function asesoria()
    {
        return $this->hasMany('App\Models\Empresas\Asesoria','accion_id');
    }

}
