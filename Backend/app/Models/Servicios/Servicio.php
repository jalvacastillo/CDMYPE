<?php

namespace App\Models\Servicios;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
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

    public function noticias(){
        return $this->hasMany('App\Models\Pagina\Noticia', 'categoria');
    }

    public function acciones(){
        return $this->hasMany(Accion::class, 'servicio_id');
    }

    public function asesores(){
        return $this->hasMany('App\Models\Servicios\Asesor');
    }

}
