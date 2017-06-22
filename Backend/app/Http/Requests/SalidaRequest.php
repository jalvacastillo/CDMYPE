<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SalidaRequest extends FormRequest
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
            'fecha' => 'required',
            'hora_salida' => 'required',
            'hora_regreso' => 'required',
            'lugar' => 'required',
            'justificacion' => 'required',
            'objetivo' => 'required',
            'encargado_id' => 'required|numeric'
        ];
    }
}
