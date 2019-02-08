<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Especialidad extends Model
{
    
    protected $table = 'especialidades';
    protected $softDelete = true;
    protected $fillable = ["nombre"];

    public function subespecialidades(){
        return $this->hasMany('App\Models\Subespecialidad', 'especialidad_id');
    }
    
}
