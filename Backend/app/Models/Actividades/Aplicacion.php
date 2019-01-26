<?php

namespace App\Models\Proyectos;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Aplicacion extends Model
{
    protected $table = 'proyecto_aplicaciones';
    protected $fillable = [
        'proyecto_id',
        'tipo',
        'estado',
        'nota',
        'usuario_id'
    ];

    protected $appends = ['nombre', 'avatar', 'detalle', 'tipo', 'fecha', 'hora'];

    public function getNombreAttribute(){
        return $this->usuario()->first()->name;
    }

    public function getAvatarAttribute(){
        return $this->usuario()->first()->avatar;
    }

    function getFechaAttribute()
    {
         return Carbon::parse($this->created_at)->format('m/d/Y');
    }

    function getHoraAttribute()
    {
         return Carbon::parse($this->created_at)->format('h:i:s a');
    }

    public function getDetalleAttribute(){
        if ($this->usuario()->first()->tipo == 'Alumno') {
            return $this->usuario()->first()->alumno()->first();
        }else if ($this->usuario()->first()->tipo == 'Consultor'){
            return $this->usuario()->first()->consultor()->first();
        }
    }

    public function getTipoAttribute(){
        return $this->usuario()->first()->tipo;
    }

    public function usuario(){
        return $this->belongsTo('App\User', 'usuario_id');
    }

    public function proyecto(){
        return $this->belongsTo('App\Models\Proyectos\Proyecto', 'proyecto_id');
    }

}