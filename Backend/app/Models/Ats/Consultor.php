<?php

namespace App\Models\Ats;

use Illuminate\Database\Eloquent\Model;

class Consultor extends Model {

    protected $table = 'at_consultores';
    protected $fillable = [
        'at_id',
        'consultor_id',
        'seleccionado',
        'fecha_oferta',
        'fecha_seleccion',
        'doc_oferta'
    ];

    protected $appends = ['nombre','especialidad', 'tema'];

    public function getNombreAttribute(){
        return $this->consultor()->first()->nombre;
    }

    public function getEspecialidadAttribute(){
        return $this->consultor()->first()->especialidad;
    }

    public function getTemaAttribute(){
        return $this->at()->pluck('tema')->first();
    }
    
        public function at() 
        {
            return $this->belongsTo('App\Models\Ats\At','at_id');
        }
        public function consultor() 
        {
            return $this->belongsTo('App\Models\Consultores\Consultor');
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