<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CapTerminoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
        // return Auth::check() ? true : false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            
            'proyecto_id'   => 'required|numeric',
            'actividad' => 'required',
            'responsable'   => 'required',
            'inicio'    => 'required',
            'fin'   => 'required'

        ];
    }
}
