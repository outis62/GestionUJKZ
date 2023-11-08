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
}
