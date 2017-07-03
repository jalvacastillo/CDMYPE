<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AtTerminoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'cliente_id' =>'required|numeric',
            'tema' => 'required',
            'obj_general' => 'required',
            'obj_especifico' => 'required',
            'productos' => 'required',
            'tiempo_ejecucion' =>'required|numeric',
            'trabajo_local' =>'required|numeric',
            'fecha' => 'required',
            'financiamiento' =>'required|numeric',
            'aporte' =>'required|numeric',
            'especialidad_id'=> 'required',
            'asesor_id'=> 'required'
        ];
    }
}
