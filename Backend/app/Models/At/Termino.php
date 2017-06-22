<?php

namespace App\Models\At;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Validator;
use Carbon\Carbon;
use Auth;

class Termino extends Model {

    /* Atributos */
    use SoftDeletes;
    protected $table = 'at_terminos';
    protected $fillable = [
        'proyecto_id',
        'cliente_id',
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


    protected $appends = ['cliente','especialidad', 'asesor', 'consultor', 'inicio', 'fin'];


    public function getAsesorAttribute()
    {
        return $this->asesor()->pluck('name')->first();
    }

    public function getClienteAttribute()
    {
        $cliente = $this->cliente()->first();

        return $cliente->empresa;
    }

    public function getConsultorAttribute()
    {
        $consultor = $this->consultor()->first();
        if ($consultor) {
            return $consultor->consultor;
        }
    }

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
        //
        public function asesor()
        {
            return $this->belongsTo('App\User');
        }

        public function cliente()
        {
            return $this->belongsTo('App\Models\Cliente\Cliente', 'cliente_id');
        }

        public function empresario()
        {
            return $this->belongsTo('App\Models\Cliente\Empresario');
        }

        public function especialidad()
        {
            return $this->belongsTo('App\Models\Especialidad');
        }

        public function consultor()
        {
            return $this->hasOne('App\Models\At\Consultor','termino_id')->where('estado', '=', 'Seleccionado');
        }
       
        public function ofertantes()
        {
            return $this->hasMany('App\Models\At\Consultor','termino_id')->where('doc_oferta', "!=", "");
        }
        public function consultores()
        {
            return $this->hasMany('App\Models\At\Consultor','termino_id');
        }

        public function contrato(){
            return $this->hasOne('App\Models\At\Contrato','termino_id');
        }

        public function acta(){
            return $this->hasOne('App\Models\At\Acta','termino_id');
        }

        public function ampliacion(){
            return $this->hasOne('App\Models\At\Ampliacion', 'termino_id');
        }

}
