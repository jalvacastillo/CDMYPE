<?php

namespace App\Models\Salidas;

use Illuminate\Database\Eloquent\Model;

class Asesor extends Model {

    protected $table = 'salida_asesores';
    protected $fillable = [
        'salida_id',
        'asesor_id'
    ];

    protected $appends = ['nombre'];

    public function getNombreAttribute(){
        return $this->asesor->nombre;
    }
    
    public function asesor(){
        return $this->belongsTo('App\Models\Pagina\Equipo', 'asesor_id');
    }

}