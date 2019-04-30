<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Atencion extends Model {

    use SoftDeletes;
    protected $table = 'atenciones';
    protected $fillable = [
        'fecha',
        'usuario_id',
        'empresa_id'
    ];

    protected $appends = ['asesor'];

    public function getAsesorAttribute(){
        return $this->usuario()->first() ? $this->usuario()->first()->name : '';
    }

    public function empresa() 
    {
        return $this->belongsTo('App\Models\Empresas\Empresa','empresa_id');
    }

    public function usuario() 
    {
        return $this->belongsTo('App\User','usuario_id');
    }

}