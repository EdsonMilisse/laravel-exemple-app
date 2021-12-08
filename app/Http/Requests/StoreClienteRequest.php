<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClienteRequest extends FormRequest
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
            
            'nome'=>'required|min:3|max:255',
            'apelido'=>'required',
            'contacto'=>'required|min:9|max:12',
            'arquivo'=>'require|docoment'
        ];
    }
    public function messages()
    {
        return [
            'nome.required'=>'O campo nome e de Prenchimento Obrigatorio',
            'apelido.required'=>'O apelido e de Prenchimento Obrigatorio',
            'contacto.required'=>'O ontacto e de Prenchimento Obrigatorio'
            
        ];
    }
}
