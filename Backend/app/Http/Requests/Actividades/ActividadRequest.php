<?php

namespace App\Http\Requests\Actividades;

use Illuminate\Foundation\Http\FormRequest;

class ActividadRequest extends FormRequest
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
            'nombre'        => 'required',
            'descripcion'   => 'required',
            'contenido'     => 'required',
            'tipo'          => 'required',
            'categoria'     => 'required',
            'inicio'        => 'required',
            'fin'           => 'required',
            'estado'        => 'required',
            'especialidad'  => 'required'
        ];
    }
}
