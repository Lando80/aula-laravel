<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => 'required',
            'preco' => 'required',
            'descricao' => 'nullable|max:100',
            'status' => 'required',
            'categoria_id' => 'required'
        ];
    }
}
