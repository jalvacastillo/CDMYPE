<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Validator;
use Carbon\Carbon;

class Bitacora extends Model {

    use SoftDeletes;
    protected $table = 'bitacoras';
    protected $fillable = [
        'usuario_id',
        'tabla',
        'tabla_id',
        'accion'
    ];


    public function usuarios() 
    {
        return $this->belongsTo('App\Models\User','usuario_id');
    }

}