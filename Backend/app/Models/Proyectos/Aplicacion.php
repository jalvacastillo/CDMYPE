<?php

namespace App\Models\Proyectos;

use Illuminate\Database\Eloquent\Model;

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

    protected $appends = ['nombre', 'avatar', 'detalle'];

    public function getNombreAttribute(){
        return $this->usuario()->first()->name;
    }

    public function getAvatarAttribute(){
        return $this->usuario()->first()->avatar;
    }

    public function getDetalleAttribute(){
        if ($this->tipo == 'Estudiante') {
            return $this->usuario()->first()->alumno()->first();
        }else if ($this->tipo == 'Consultor'){
            return $this->usuario()->first()->consultor()->first();
        }
    }

    public function usuario(){
        return $this->belongsTo('App\User', 'usuario_id');
    }

}