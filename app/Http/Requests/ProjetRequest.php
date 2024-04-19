<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjetRequest extends FormRequest
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
           'codeProjet'=>'required|string|max:10',
           'nomProjet'=>'required|string|max:255',
           'dateLancement'=>'required|after_or_equal:today',
           'duree'=>'required|string|max:20',
           'localite_id'=>'required|exists:localites,id'
        ];
    }
}
