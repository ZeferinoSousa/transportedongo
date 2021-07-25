<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateCaminhada extends FormRequest
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
                'titulo'=> 'required|min:3|max:45',
                'descricao' => 'required|min:10'
            ];
        }
        return [
            'titulo'=> 'required|min:3|max:45',
            'imagem'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:512',
            'descricao' => 'required|min:10'
        ];

        
        
    }
}
