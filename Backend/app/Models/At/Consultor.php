<?php

namespace App\Models\At;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Validator;
use Carbon\Carbon;

class Consultor extends Model {

    use SoftDeletes;
    protected $table = 'at_consultores';
    protected $fillable = [
        'consultor_id',
        'termino_id',
        'fecha_oferta',
        'fecha_seleccion',
        'estado',
        'doc_oferta',
        'evaluacion'
    ];

    protected $appends = ['consultor', 'tema'];

    public function getConsultorAttribute(){
        return $this->consultor()->pluck('nombre')->first();
    }

    public function getTemaAttribute(){
        return $this->termino()->pluck('tema')->first();
    }
    
        public function termino() 
        {
            return $this->belongsTo('App\Models\At\Termino','attermino_id');
        }
        public function consultor() 
        {
            return $this->belongsTo('App\Models\Consultor\Consultor');
        }
        public function atContratos() 
        {
            return $this->hasmany('App\Models\At\Contrato','atconsultor_id');
        }

        public function ampliacionesContratos() 
        {
            return $this->hasmany('App\Models\At\Ampliacion','atconsultor_id');
        }

        public function actas() 
        {
            return $this->hasmany('App\Models\At\Acta','atconsultor_id');
        }

        

}