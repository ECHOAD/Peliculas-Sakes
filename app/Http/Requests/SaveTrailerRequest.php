<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveTrailerRequest extends FormRequest
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
            'puntuacion'=>'required|numeric',
            'titulo'=>'required|max:30',
            'url'=>'required',
            'genero'=>'required',
            'descripcion'=>'max:150',
            'portada'=>'required'


        ];
    }

    public function messages(){

        return[

            'puntuacion.required'=>'El trailer necesita una puntuacion',
            
            'titulo.required'=>'El titulo es requerido para agregar el trailer',

            'url.required'=>'El link del trailer es obligatorio',
           
            'descripcion.max'=>'La descripcion es demasiada extensa. El limite es 250 carácteres',

            'portada.required'=>'Se necesita una portada para la pelicula'
         


        ];
    }
}
