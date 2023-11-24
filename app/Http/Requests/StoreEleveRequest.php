<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEleveRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'cycle_id' => 'required',
            'niveauetude_id' => 'required',
            'filiere_id' => 'required',
            'nationalite_id' => 'required',
            'anneeuniversitaire_id' => 'required',
            'matricule' => 'required',
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'datenaissance' => 'required|date',
            'genre_id' => 'required',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|max:255',
            'confirmerpassword' => 'required|string|max:255',
            'telephone' => 'required',
            'tuteur_id' => 'required',
            'image' => 'required',
        ];
    }
    public function messages()
    {
        return [

            'nom.required' => 'le champ nom est requis',
            'nom.min' => 'Le nom doit contenir au moins 3 caractères',
            'prenom.required' => 'le champ prenom est requis',
            'datenaissance.required' => 'le champ date de naissance est requis',
            'genre.required' => 'le champ genre est requis',
            'cycle.required' => 'le champ cycle est requis',
            'niveauetude.required' => 'le champ niveau etude est requis',
            'email.required' => 'le champ email est requis',
            'password.required' => 'le champ mot de passe est requis',
            'telephone.required' => 'le champ telephone est requis',
            'photo.required' => 'le champ photo est requis',
            'matricule.required' => 'le champ matricule est requis',
            'nationalite' => 'le champ nationalite est requis',
            'anneeuniversitaire.required' => 'le champ annee universitaire est requis',
            'confirmerpassword.required' => 'le champ confirmer mot de passe est requis',
            'filiere.required' => 'le champ filiere est requis',

        ];
    }
}
