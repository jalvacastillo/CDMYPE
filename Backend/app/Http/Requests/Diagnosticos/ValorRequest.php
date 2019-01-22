<?php

namespace App\Http\Requests\Diagnosticos;

use Illuminate\Foundation\Http\FormRequest;

class ValorRequest extends FormRequest
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
            'pregunta_id'        => 'required'
        ];
    }
}
