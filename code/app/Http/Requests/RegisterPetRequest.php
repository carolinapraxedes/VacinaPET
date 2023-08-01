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
            'descriptionPet' => 'nullable|string|max:255',
            'nameTutor' => 'required|string|max:255',
            'cpfTutor' => 'required|string|min:14|max:14',
            'emailTutor' => 'required|email|max:100',
            'numberPhoneTutor' => 'required|string|max:15',
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
            'descriptionPet'=> 'A descrição deve ter no máximo :max caracteres.',

            'nameTutor.required'=>'Por favor, informe o nome do Tutor',
            'nameTutor.max'=>'O nome do Tutor deve ter no máximo :max caracteres.',

            'cpfTutor.required'=>'Por favor, preencha o CPF',
            'cpfTutor.min'=>'O CPF precisa ter no mínimo :min caracteres.',
            'cpfTutor.max'=>'O CPF precisa ter no máximo :max caracteres.',
            'cpfTutor.formato_cpf'=>'O CPF deve ser um CPF válido.',

            'emailTutor.required'=>'Por favor, informe o e-mail do Tutor',
            'emailTutor.max'=>'O e-mail do Tutor deve ter no máximo :max caracteres.',
            'emailTutor.email'=>'O e-mail do Tutor deve ser um endereço válido.',
            
            'numberPhoneTutor.required' => 'Por favor, informe o número de telefone do Tutor.',
            'numberPhoneTutor.max' => 'O número de telefone do Tutor deve ter no máximo :max caracteres.',

        ];
    }
}
