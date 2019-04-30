<?php

namespace App\Models\Caps;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model {

    protected $table = 'cap_contratos';
    protected $fillable = [
        'cap_id',
        'lugar',
        'pago',
        'firma'
    ];

    public function cap()
    {
        return $this->belongsTo('App\Models\Caps\Cap','cap_id');
    }


}