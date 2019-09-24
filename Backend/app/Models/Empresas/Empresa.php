<?php

namespace App\Models\Empresas;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empresa extends Model {

    use SoftDeletes;
    protected $table = 'empresas';
    protected $fillable = [
        'nombre',
        'estado',
        'procedencia',
        'nit',
        'iva',
        'nrc',
        'dui',
        'telefono',
        'constitucion',
        'direccion',  
        'municipio',
        'departamento',
        'ubicacion', 
        'fundacion',
        'contabilidad',
        'sector',
        'tamano',
        'descripcion',
        'actividad',
        'img',
        'url_facebook',
        'correo',
        'url_web',
        'catalogo',
        'url_instagram',
        'whatsapp',
        'ubicacion_geo',
        'longitud',
        'latitud',
    ];

    protected $appends = ['aporte', 'atendido', 'evaluacion'];


        public function getCatalogoAttribute($value){
            return $value == 1 ? true : false;
        }

        public function getEvaluacionAttribute(){
            $notas = $this->notas()->get();
            
            if ($notas->count() > 0)
                $nota =  $notas->avg('evaluacion');
            else
                $nota = null;
            
            return $nota;
        }

        public function getAtendidoAttribute(){
            $atendido = $this->proyectos()->whereYear('created_at', date('Y'))->get();
            return $atendido->count() > 0 ? true : false;
        }


        public function getPasoAttribute(){

            if($this->proyectos != '[]')
                return 5;
            elseif($this->indicador)
                return 4;
            elseif($this->empresarios != '[]')
                return 3;

            return 2;
        }

        // public function getEmpresarioAttribute(){
        //     return $this->empresarios()->first();
        // }

        public function getAporteAttribute(){
            // Tamaño
            $aporte = true;
            $empresario = $this->empresario;

            if ($empresario) {

                if ($this->clasificacion == 'Subsistencia') {
                    $tamano = 5;
                    // Genero
                    if ($empresario->sexo == 'Mujer') {
                        $genero = 3;
                    }else{
                        $genero = 5;
                    }
                    // Ubicacion
                    if ($this->ubicacion == 'Rural') {
                        $ubicacion = 5;
                    }else{
                        $ubicacion = 2;
                    }
                    // Generacional
                    if ($this->empresario->edad <= 25) {
                        $generacional = 3;
                    }elseif ($this->empresario->edad > 25){
                        $generacional = 5;
                    }
                    // Sector
                    if ($this->sector_economico == 'Calzado' or $this->sector_economico == 'Comercio' or $this->sector_economico == 'Otros' ) {
                        $sector = 10; //No estrategico
                    }else{
                        $sector = 5; //Estrategico
                    }
                    // Asociatividad
                    if ($this->constitucion == 'Persona Natural' or $this->constitucion == 'Informal Natural') {
                        $asociatividad = 10; //No asociada
                    }else{
                        $asociatividad = 5;
                    }
                }elseif ($this->clasificacion == 'Micro-empresa'){
                    $tamano = 10;
                    // Genero
                        if ($empresario->sexo == 'Mujer') {
                            $genero = 5;
                        }else{
                            $genero = 10;
                        }
                    // Ubicacion
                    if ($this->ubicacion == 'Rural') {
                        $ubicacion = 10;
                    }else{
                        $ubicacion = 3;
                    }
                    // Generacional
                    if ($this->empresario->edad <= 25) {
                        $generacional = 5;
                    }elseif ($this->empresario->edad > 25){
                        $generacional = 10;
                    }
                    // Sector
                    if ($this->sector_economico == 'Calzado' or $this->sector_economico == 'Comercio' or $this->sector_economico == 'Otros' ) {
                        $sector = 10; //No estrategico
                    }else{
                        $sector = 5; //Estrategico
                    }
                    // Asociatividad
                    if ($this->constitucion == 'Persona Natural' or $this->constitucion == 'Informal Natural') {
                        $asociatividad = 10; //No asociada
                    }else{
                        $asociatividad = 5;
                    }
                }elseif ($this->clasificacion == 'Pequeña Empresa'){
                    $tamano = 20;
                    // Genero
                        if ($empresario->sexo == 'Mujer') {
                            $genero = 10;
                        }else{
                            $genero = 20;
                        }
                    // Ubicacion
                    if ($this->ubicacion == 'Rural') {
                        $ubicacion = 20;
                    }else{
                        $ubicacion = 10;
                    }
                    // Generacional
                    if ($this->empresario->edad <= 25) {
                        $generacional = 5;
                    }elseif ($this->empresario->edad > 25){
                        $generacional = 10;
                    }
                    // Sector
                    if ($this->sector_economico == 'Calzado' or $this->sector_economico == 'Comercio' or $this->sector_economico == 'Otros' ) {
                        $sector = 20; //No estrategico
                    }else{
                        $sector = 10; //Estrategico
                    }
                    // Asociatividad
                    if ($this->constitucion == 'Persona Natural' or $this->constitucion == 'Informal Natural') {
                        $asociatividad = 20; //No asociada
                    }else{
                        $asociatividad = 10;
                    }
                }else{
                    $aporte = false;
                }
            }else{
                $aporte = false;
            }

            if ($aporte) {
                $suma = $tamano + $ubicacion + $genero + $generacional + $sector + $asociatividad;
                $aporte = round(($suma / 6), 2);
                return $aporte;
            }else{
                return '0';
            }
        }

        public static function findOrCreateBySessionID($empresa_id)
        {
            if ($empresa_id) {
                return Empresa::find($empresa_id);
            } else {
                return Empresa::create(['estado' => 'Prospecto', 'procedencia'=> 'Página Web']);
            }
        }


	/* Relaciones */

        public function terminos()
        {
            return $this->hasMany('App\Models\At\Termino','empresa_id');
        }

        public function empresarios()
        {
            return $this->hasMany('App\Models\Empresas\EmpresaEmpresario', 'empresa_id');
        }
        
        public function productos()
        {
            return $this->hasMany('App\Models\Empresas\Producto');
        }

        public function notas() 
        {
            return $this->hasMany('App\Models\Empresas\Nota', 'empresa_id');
        }

        public function indicadores(){
            return $this->hasmany('App\Models\Empresas\Indicador', 'empresa_id');
        }

        public function proyectos(){
            return $this->hasMany('App\Models\Empresas\Proyecto', 'empresa_id');
        }
}
