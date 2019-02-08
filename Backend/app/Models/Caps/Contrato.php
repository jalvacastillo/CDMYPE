<?php

namespace App\Models\Cap;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contrato extends Model {

    use SoftDeletes;
    
    protected $table = 'cap_contratos';
    protected $fillable = [
        'termino_id',
        'lugar',
        'pago',
        'firma'
    ];


}