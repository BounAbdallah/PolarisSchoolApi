<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUERequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'libelle' => 'sometimes|required|string|max:255',
            'date_debut' => 'sometimes|required|date',
            'date_fin' => 'sometimes|required|date|after_or_equal:date_debut',
            'coef' => 'sometimes|required|integer|min:1',
        ];
    }

    public function messages()
    {
        return [
            'libelle.required' => 'Le libellé est requis.',
            'date_debut.required' => 'La date de début est requise.',
            'date_fin.required' => 'La date de fin est requise.',
            'date_fin.after_or_equal' => 'La date de fin doit être après ou égale à la date de début.',
            'coef.required' => 'Le coefficient est requis.',
            'coef.integer' => 'Le coefficient doit être un entier.',
            'coef.min' => 'Le coefficient doit être au moins 1.',
        ];
    }
}
