<?php

namespace App\Models\Cap;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consultor extends Model {

    use SoftDeletes;
    protected $table = 'cap_consultores';
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

        
        public function capContratos() 
        {
            return $this->hasmany('App\Models\Cap\Contrato','capconsultor_id');
        }


        public function capTerminos() 
        {
            return $this->belongsTo('App\Models\Cap\Termino','captermino_id');
        }

        public function consultor() 
        {
            return $this->belongsTo('App\Models\Consultor\Consultor');
        }

}