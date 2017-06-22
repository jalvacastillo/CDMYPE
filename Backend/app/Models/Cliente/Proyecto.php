<?php

namespace App\Models\Cliente;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Carbon\Carbon;

class Proyecto extends Model {

    use SoftDeletes;
    protected $table = 'cliente_proyectos';
    protected $fillable = array(
        'asesor_id',
        'cliente_id',
        'nombre',
        'fecha_fin',
        'impacto'
    );
    
//custom attributes
        // public function getActividadesCompletasAttribute(){
        //     return $this->actividades()->where('completo', '=', '1')->count();
        // }

        // public function getTotalActividadesAttribute(){
        //     return $this->actividades()->count();
        // }

        // public function getAvanceAttribute(){
        //     if($this->getActividadesCompletasAttribute() == 0 || $this->getTotalActividadesAttribute() == 0 )
        //         return 0;
        //     return (( $this->getActividadesCompletasAttribute() / $this->getTotalActividadesAttribute()) * 100);
        // }

    public function cliente(){
        return $this->belongsTo('App\Models\Cliente', 'cliente_id');
    }
    
    public function asesor(){
        return $this->belongsTo('App\User', 'asesor_id');
    }

    public function acciones(){
        return $this->hasMany('App\Models\Cliente\Accion', 'proyecto_id');
    }


}