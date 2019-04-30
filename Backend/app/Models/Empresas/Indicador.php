<?php

namespace App\Models\Empresas;

use Illuminate\Database\Eloquent\Model;

class Indicador extends Model {

    protected $table = 'empresa_indicadores';    
    protected $fillable = array(
        'fecha',
        'venta_nacional',
        'venta_expo',
        'empleo_hf',
        'empleo_ht',
        'empleo_mf',
        'empleo_mt',
        'costos',
        'financiamiento',
        'capital_semilla',
        'm_local',
        'm_nacional',
        'm_regional',
        'm_internacional',
        'productos',
        'usuario_id',
        'empresa_id',
    );

    protected $appends = ['usuario'];

    public function getUsuarioAttribute(){
        return $this->usuario()->pluck('name')->first();
    }
    
    public function cliente(){
        return $this->belongsTo('App\Cliente\Cliente', 'cliente_id');
    }

    public function usuario(){
    	return $this->belongsTo('App\User', 'usuario_id');
    }

}