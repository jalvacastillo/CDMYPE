<?php

namespace App\Models\Servicios;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Servicio extends Model
{
    use SoftDeletes;
    protected $table = 'servicios';
    protected $fillable = [
        'nombre',
        'tipo',
        'categoria',
        'descripcion',
        'img'
    ];

    protected $appends = ['total_acciones'];

    public function getTotalAccionesAttribute(){
        return $this->acciones()->count();
    }

    public function acciones(){
        return $this->hasMany(Accion::class, 'servicio_id');
    }

    public function asesores(){
        return $this->hasMany('App\Models\Servicios\Asesor');
    }

}
