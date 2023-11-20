<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterPetRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'namePet' => 'required|string|min:3|max:140',
            'speciePet' => 'required|string',
            'breedPet' => 'required|string',
            'genderPet' => 'required|string',
            'rgaPet' => 'required|string|min:8|max:8',
            'colorPet' => 'nullable|string|max:70',
            
            'dateBirthPet' => 'required|date',
 
        ];
    }

    public function messages()
    {
        return [
            'namePet.required' => 'Por favor, preencha o nome.',
            'namePet.min' => 'O campo Nome deve ter no mínimo :min caracteres.',
            'namePet.max' => 'O campo Nome deve ter no máximo :max caracteres.',

            'speciePet.required' => 'Por favor, selecione a espécie.',
            'breedPet.required' => 'Por favor, selecione a raça.',
            'genderPet' => 'Por favor, selecione o sexo do animal.',

            'rgaPet.required' =>'Por favor, informe o RGA do animal.',
            'rgaPet.min' => 'O campo RGA deve ter no mínimo :min caracteres.',
            'rgaPet.max' => 'O campo RGA deve ter no máximo :max caracteres.',

            'colorPet.max' => 'O campo Cor deve ter no máximo :max caracteres.',

            'dateBirthPet.required' => 'Por favor, informe a idade do animal',
            

        

        ];
    }
}
