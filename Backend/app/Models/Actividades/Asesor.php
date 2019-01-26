<?php

namespace App\Models\Proyectos;

use Illuminate\Database\Eloquent\Model;

class Asesor extends Model
{
    protected $table = 'proyecto_asesores';
    protected $fillable = [
        'asesor_id',
        'proyecto_id'
    ];

    protected $appends = ['nombre', 'titulo', 'categoria', 'cargo', 'avatar'];

    public function getNombreAttribute(){
        return $this->asesor()->pluck('nombre')->first();
    }

    public function getAvatarAttribute(){
        return $this->asesor()->pluck('avatar')->first();
    }

    public function getTituloAttribute(){
        return $this->asesor()->pluck('titulo')->first();
    }

    public function getCategoriaAttribute(){
        return $this->asesor()->pluck('categoria')->first();
    }

    public function getCargoAttribute(){
        return $this->asesor()->pluck('cargo')->first();
    }

    public function asesor(){
        return $this->belongsTo('App\Models\Pagina\Equipo', 'asesor_id');
    }

}