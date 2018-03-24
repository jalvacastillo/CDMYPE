<?php

namespace App\Models\Pagina;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proyecto extends Model
{
    use SoftDeletes;
    protected $table = 'proyectos';
    protected $fillable = [
        'titulo',
        'descripcion',
        'tipo',
        'finalizacion',
        'estado',
        'duracion',
        'especialidad_id',
        'cdmype_id',
        'asesor_id',
    ];

    protected $appends = ['asesor', 'especialidad'];

    public function getAsesorAttribute(){
        return $this->asesor()->pluck('name')->first();
    }

    public function getEspecialidadAttribute(){
        return $this->especialidad()->pluck('nombre')->first();
    }

    public function asesor(){
        return $this->belongsTo('App\User', 'asesor_id');
    }

    public function especialidad(){
        return $this->belongsTo('App\Models\Especialidad', 'especialidad_id');
    }
}
