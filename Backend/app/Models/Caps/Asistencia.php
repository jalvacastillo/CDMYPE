<?php

namespace App\Models\Caps;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model {

    protected $table = 'cap_asistencias';
    protected $fillable = [
        'cap_id',
        'empresario_id',
        // 'invitado',
        'asistencia'
    ];
    
    public $appends = ['nombre', 'empresa'];

    public function getNombreAttribute(){
        return $this->empresario()->first()->nombre;
    }

    public function getEmpresaAttribute(){
        $empresa = $this->empresario()->first()->empresas()->first();
        if ($empresa)
            return $empresa->empresa()->first()->nombre;
        else
            return null;
    }

    public function empresario() 
    {
        return $this->belongsTo('App\Models\Empresas\Empresario','empresario_id');
    }

    public function cap() 
    {
        return $this->belongsTo('App\Models\Caps\Cap','cap_id');
    }

}