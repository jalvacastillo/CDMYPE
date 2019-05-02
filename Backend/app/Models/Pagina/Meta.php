<?php

namespace App\Models\Pagina;

use Illuminate\Database\Eloquent\Model;

class Meta extends Model {

    protected $table = 'asesor_metas';
    protected $fillable = array(
        'mes',
        'ano',
        'meta',
        'asesor_id'
    );

    protected $appends = ['empresas'];

    public function getEmpresasAttribute(){
        $empresas = $this->asesor()->first()->proyectos()->whereYear('inicio', $this->ano)->whereMonth('inicio', $this->mes)->get();
        return $empresas->count();
    }

    public function asesor(){
        return $this->belongsTo('App\Models\Pagina\Equipo', 'asesor_id');
    }


}



