<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateUser extends FormRequest
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
                'name' => 'required|min:3|max:45',
                'email' => 'required|email|min:3',
            ];
        }
        return [
            'name' => 'required|min:3|max:45',
            'email' => 'required|unique:users|email:unique|min:3',
            'password' => 'required|min:3'
        ];
    }
}
