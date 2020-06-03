<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HeroeRequest extends FormRequest
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
        return[
            'nombre' => ['required','max:150'],
            'titulo' => ['required','max:250'],
            'descripcion' => ['required','max:1000'],
            'imagen' => 'image|mimes:jped,jpg,png,gif,svg|max:2048',
        ];
        
    }
}
