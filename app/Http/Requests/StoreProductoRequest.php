<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductoRequest extends FormRequest
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
            "nombre" => 'required|alpha|unique:productos,nombre',
            "desc" => 'required|max:100',
            "precio" => 'required|numeric|max:10000',
            "marca" => 'required',
            "categoria" => 'required',
            "imagen" => 'required|image'
        ];
    }

    /**
     * Mensajes personalizados
     */

     public function messages()
     {
        return [
            'required' => 'Este campo es obligatorio',
            'alpha' => 'Este campo solo permite letras',
            'max' => 'El campo solo permite maximo:max caracteres',
            'numeric' => 'Este campo solo permite numeros',
            'image' => 'El campo solo permite archivos de tipo imagen',
            'unique' => 'El producto ya existe en la base de datos'
        ];
     }
}