<?php

namespace App\Models\Cliente;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Indicador extends Model {

    protected $table = 'cliente_indicadores';    
    protected $fillable = array(
        'asesor_id',
        'cliente_id',
        'venta_nacional',
        'venta_expo',
        'empleo_hf',
        'empleo_ht',
        'empleo_mf',
        'empleo_mt',
        'costos',
        'financiamiento',
        'capital',
        'mercados',
        'productos',
        'tipo'
    );

    protected $appends = ['asesor'];

    public function getAsesorAttribute(){
        return $this->asesor()->pluck('name')->first();
    }
    
    public function cliente(){
        return $this->belongsTo('App\Cliente\Cliente', 'cliente_id');
    }

    public function asesor(){
    	return $this->belongsTo('App\User', 'asesor_id');
    }

}