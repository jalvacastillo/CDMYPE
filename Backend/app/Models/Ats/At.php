<?php

namespace App\Models\Ats;

use Illuminate\Database\Eloquent\Model;

class At extends Model {

    protected $table = 'ats';
    protected $fillable = [
        'tema',
        'obj_general',
        'obj_especifico',
        'productos',
        'tiempo_ejecucion',
        'trabajo_local',
        'fecha',
        'financiamiento',
        'aporte',
        'estado',
        'especialidad_id',
        'asesor_id',
        'informe',
        'fecha_aprobacion'
    ];


    protected $appends = ['especialidad'];
    // protected $appends = ['empresa','especialidad', 'asesor', 'consultor', 'inicio', 'fin'];


    public function getInicioAttribute()
    {
        $contrato = $this->contrato()->first();
        if ($contrato) {
            return $contrato->inicio;
        }
    }

    public function getFinAttribute()
    {
        $contrato = $this->contrato()->first();
        if ($contrato) {
            return $contrato->fin;
        }

    }

    public function getEspecialidadAttribute()
    {
        return $this->especialidad()->pluck('nombre')->first();
    }

    public function asesor()
    {
        return $this->belongsTo('App\Models\Pagina\Equipo', 'asesor_id');
    }

    public function empresas()
    {
        return $this->hasMany('App\Models\Ats\Empresa');
    }

    public function empresario()
    {
        return $this->belongsTo('App\Models\Empresas\Empresario');
    }

    public function especialidad()
    {
        return $this->belongsTo('App\Models\Especialidad');
    }

    public function consultor()
    {
        return $this->hasOne('App\Models\Ats\Consultor','at_id')->where('estado', '=', 'Seleccionado');
    }
   
    public function ofertantes()
    {
        return $this->hasMany('App\Models\Ats\Consultor','at_id')->where('doc_oferta', "!=", "");
    }
    public function consultores()
    {
        return $this->hasMany('App\Models\Ats\Consultor','at_id');
    }

    public function contrato(){
        return $this->hasOne('App\Models\Ats\Contrato','at_id');
    }

    public function acta(){
        return $this->hasOne('App\Models\Ats\Acta','at_id');
    }

    public function ampliacion(){
        return $this->hasOne('App\Models\Ats\Ampliacion', 'at_id');
    }

}
