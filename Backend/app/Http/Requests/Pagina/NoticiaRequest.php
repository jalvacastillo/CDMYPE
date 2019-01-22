<?php

namespace App\Http\Requests\Pagina;

use Illuminate\Foundation\Http\FormRequest;

class NoticiaRequest extends FormRequest
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
            'titulo' => 'required',
            'slug'  => 'required',
            'descripcion' => 'required',
            'file'          => 'mimes:jpeg,png|max:40000',
            'img'           => 'required',
            'categoria' => 'required',
            'asesor_id' => 'required'
        ];
    }
}
