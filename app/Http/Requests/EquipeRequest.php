<?php

namespace Brasil\Http\Requests;

use Brasil\Http\Requests\Request;

class EquipeRequest extends Request
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
            'nome' => 'required|min:3',
            'uf' => 'required|min:2|max:2'
        ];
    }
    
    public function messages()
    {
        return [
            'nome.required' => 'O campo nome é obrigatório',
            'nome.min' => 'O campo nome deve ter ao menos 3 caracteres',
            'uf.required' => 'O campo UF é obrigatório',
            'uf.min' => 'O campo UF deve ter exatamente 2 caracteres',
            'uf.max' => 'O campo UF deve ter exatamente 2 caracteres'
        ];
    }
}
