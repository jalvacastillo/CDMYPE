<?php

namespace App\Models\Materiales;

use Illuminate\Database\Eloquent\Model;

class Material extends Model {

    protected $table = 'materiales';
    protected $fillable = [
        'nombre',
        'descripcion',
        'asesor_id',
        'especialidad_id'
    ];
    protected $appends = ['especialidad', 'total_recursos'];

    public function getEspecialidadAttribute(){
        return $this->especialidad()->pluck('nombre')->first();
    }

    public function getTotalRecursosAttribute(){
        return $this->recursos->count();
    }

    public function especialidad()
    {
        return $this->belongsTo('App\Models\Subespecialidad', 'especialidad_id');
    }

    public function recursos()
    {
        return $this->hasMany('App\Models\Materiales\Recurso', 'material_id');
    }

    public function asesor(){
        return $this->belongsTo('App\Models\Pagina\Equipo', 'asesor_id');
    }
}

