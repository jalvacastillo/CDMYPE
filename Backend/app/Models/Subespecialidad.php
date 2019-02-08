<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subespecialidad extends Model
{
    
    protected $table = 'subespecialidades';
    protected $softDelete = true;
    protected $fillable = ['nombre', 'especialidad_id'];
    
    protected $appends = ['especialidad'];

    public function getEspecialidadAttribute(){
        return $this->especialidad()->first()->nombre;
    }

    public function especialidad(){
        return $this->belongsTo('App\Models\Especialidad', 'especialidad_id');
    }
    
}
