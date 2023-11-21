<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTuteurRequest extends FormRequest
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
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'telephone' => 'required',
            'email' => 'required',
            'residence' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'nom.required' => 'le champ nom est requis',
            'nom.min' => 'le nom doit avoir plus de 3 caracteres',
            'prenom.required' => 'le champ prenom est requis',
        ];
    }
}
