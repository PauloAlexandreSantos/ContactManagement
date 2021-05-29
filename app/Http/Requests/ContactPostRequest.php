<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactPostRequest extends FormRequest
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
            'name' => 'required|min:6',
            'email' => 'email|required|unique:contact',
            'contact' => 'required|integer|min:9|unique:contact'
            //
        ];
    }
    

    public function messages()
    {
        return [
            'name.required' => 'O campo Nome é obrigatório',
            'name.min' => 'O campo Nome deve ser preenchido no mínimo com 6 caracteres',
            'email.required' => 'O campo email é obrigatório',
            'email.email' => 'Não colocou um email válido. ex: e@e.e',
            'email.unique' => 'O email que digitou já existe no sistema',

            'contact.unique' => 'O contact que digitou já existe no sistema',
            'contact.integer' => 'O contacto que digitou não é um número',
            'contact.min' => 'O tamanho mínimo de um contacto aceite é 9 digitos',
            'contact.required' => 'O campo contacto é obrigatório'
            //
        ];
    }
}
