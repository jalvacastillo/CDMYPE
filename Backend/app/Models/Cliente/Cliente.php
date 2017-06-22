<?php

namespace App\Models\Cliente;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model {

    use SoftDeletes;
    protected $table = 'clientes';
    protected $fillable = ['empresario_id', 'empresa_id', 'tipo', 'procedencia'];

    protected $appends = ['empresa', 'empresario'];


    public function getEmpresaAttribute(){
        return $this->empresa()->pluck('nombre')->first();;
    }

    public function getEmpresarioAttribute(){
        return $this->empresario()->pluck('nombre')->first();;
    }


    public function empresa()
    {
        return $this->belongsTo('App\Models\Cliente\Empresa','empresa_id');
    }

    public function empresario()
    {
        return $this->belongsTo('App\Models\Cliente\Empresario','empresario_id');
    }

    public function indicadores()
    {
        return $this->hasMany('App\Models\Cliente\Indicador');
    }

    public function ats()
    {
        return $this->hasMany('App\Models\At\Termino', 'cliente_id');
    }


}
