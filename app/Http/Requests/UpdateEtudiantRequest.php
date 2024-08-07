<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEtudiantRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Adjust as needed for authorization
    }

    public function rules()
    {
        $etudiantId = $this->route('etudiant')->id; // Get the ID of the current Etudiant object

        return [
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'date_de_naissance' => 'required|date',
            'adresse' => 'required|string|max:255',
            'telephone' => 'required|string|max:20',
            'matricule' => 'required|string|unique:etudiants,matricule,' . $etudiantId,
            'email' => 'required|email|unique:etudiants,email,' . $etudiantId,
            'mot_de_pass' => 'nullable|string|min:6', // Allow updating without changing password
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
            'mot_de_pass.min' => 'Le mot de passe doit contenir au moins 6 caractères.',
            'photo.image' => 'La photo doit être une image.',
            'photo.mimes' => 'La photo doit être de type jpeg, png, jpg, ou gif.',
            'photo.max' => 'La photo ne doit pas dépasser 2 Mo.',
        ];
    }
}
