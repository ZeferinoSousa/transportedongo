<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateInfo extends FormRequest
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
        $id = $this->segment(3);
        if ($this->method() == 'PUT') {
            return [
                'nome'=> 'required|min:3|max:45',
                'descricao' => 'required|min:10',
                'missao_imagem'=> 'image|mimes:jpeg,png,jpg,gif,svg|max:512',
                'missao' => 'required|min:10',
                'valores_imagem'=> 'image|mimes:jpeg,png,jpg,gif,svg|max:512',
                'valores' => 'required|min:10',
                'telefone'=> 'required|min:3|max:45',
                'telemovel1'=> 'required|min:3|max:45',
                'telemovel2'=> 'required|min:3|max:45',
                'email1'=> 'required|min:3|max:45',
                'email2'=> 'required|min:3|max:45',
                'local'=> 'required|min:3|max:55',
            ];
        }
        return [
            'nome'=> 'required|min:3|max:45',
            'descricao' => 'required|min:10',
            'missao_imagem'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:512',
            'missao' => 'required|min:10',
            'valores_imagem'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:512',
            'valores' => 'required|min:10',
            'telefone'=> 'required|min:3|max:45',
            'telemovel1'=> 'required|min:3|max:45',
            'telemovel2'=> 'required|min:3|max:45',
            'email1'=> 'required|min:3|max:45',
            'email2'=> 'required|min:3|max:45',
            'local'=> 'required|min:3|max:55',
        ];

        
        
    }
}
