<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEtudiantRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Adjust as needed for authorization
    }

    public function rules()
    {
        return [
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'date_de_naissance' => 'required|date',
            'adresse' => 'required|string|max:255',
            'telephone' => 'required|string|max:20',
            'matricule' => 'required|string|unique:etudiants,matricule',
            'email' => 'required|email|unique:etudiants,email',
            'mot_de_pass' => 'required|string|min:6', // You might want to handle password hashing elsewhere
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Optional image validation
        ];
    }

    public function messages()
    {
        return [
            'prenom.required' => 'Le prénom est requis.',
            'nom.required' => 'Le nom est requis.',
            'date_de_naissance.required' => 'La date de naissance est requise.',
            'adresse.required' => 'L\'adresse est requise.',
            'telephone.required' => 'Le numéro de téléphone est requis.',
            'matricule.required' => 'Le matricule est requis.',
            'matricule.unique' => 'Le matricule est déjà utilisé.',
            'email.required' => 'L\'email est requis.',
            'email.unique' => 'L\'email est déjà utilisé.',
            'mot_de_pass.required' => 'Le mot de passe est requis.',
            'photo.image' => 'La photo doit être une image.',
            'photo.mimes' => 'La photo doit être de type jpeg, png, jpg, ou gif.',
            'photo.max' => 'La photo ne doit pas dépasser 2 Mo.',
        ];
    }
}
