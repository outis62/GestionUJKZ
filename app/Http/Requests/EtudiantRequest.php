<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EtudiantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'cycle' => 'required|string|max:255',
            'niveauetude' => 'required|string|max:255',
            'filiere' => 'required|string|max:255',
            'nationalite' => 'required|string|max:255',
            'anneeuniversitaire' => 'required|string|max:255',
            'matricule' => 'required|integer|max:255',
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'datenaissance' => 'required|date|max:255',
            'genre' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'motdepasse' => 'required|string|max:255',
            'confirmermotdepasse' => 'required|string|max:255',
            'telephone' => 'required|integer|max:255',
            'photo' => 'required|file|max:255',
        ];
    }
    public function messages()
    {
        return [

            'nom.required' => 'le champ nom est requis',
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
