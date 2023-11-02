<?php

namespace App\Http\Requests;

use App\Rules\minAgeTutor;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRGArequest extends FormRequest
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
            'nameTutor'=> 'required|string|max:255',
            'emailTutor' => 'required|email|max:100',
            'cpfTutor' => 'required|string|min:14|max:14',
            'dateBirthTutor' => ['required','date', new minAgeTutor],
            'numberPhoneTutor' => 'required|string|max:15',
          
            'namePet' => 'required|string|min:3|max:60',
            'speciePet' => 'required',
            'breedPet' => 'required',
            'genderPet' => 'required',
            'dateBirthPet' => 'required|date',

            'colorPet' => 'required',
            'sizePet' => 'required',
            'coatPet' => 'required',
            'profilePet' => 'required',
            'provenancePet' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nameTutor.required' => 'Por favor, preencha o nome do tutor do animal.',
            'nameTutor.max' => 'O nome do tutor do animal deve ter no máximo :max caracteres.',

            'emailTutor.required'=>'Por favor, informe o e-mail do tutor do animal.',
            'emailTutor.max'=>'O e-mail do tutor deve ter no máximo :max caracteres.',
            'emailTutor.email'=>'O e-mail do tutor deve ser um endereço válido.',

            'cpfTutor.required'=>'Por favor, preencha o CPF',
            'cpfTutor.min'=>'O CPF precisa ter no mínimo :min caracteres.',
            'cpfTutor.max'=>'O CPF precisa ter no máximo :max caracteres.',

            'dateBirthTutor.required' => 'Por favor, informe a data de nascimento do tutor.',

            'numberPhoneTutor.required' => 'Por favor, informe o número de telefone do tutor.',
            'numberPhoneTutor.max' => 'O número de telefone do Tutor deve ter no máximo :max caracteres.',


            'namePet.required' => 'Por favor, informe o nome do animal.',
            'namePet.min' => 'O nome do animal precisa ter no mínimo :min caracteres.',
            'namePet.max' => 'O nome do animal precisa ter no máximo :max caracteres.',


            'speciePet.required' => 'Por favor, selecione a espécie do animal.',
            'breedPet.required' => 'Por favor, selecione a raça do animal.',
            'genderPet.required' => 'Por favor, selecione o sexo do animal.',
            'dateBirthPet.required' => 'Por favor, informe a data de nascimento do animal.',

            'colorPet.required' => 'Por favor, selecione a cor do animal.',
            'sizePet.required' => 'Por favor, selecione o porte do animal.',
            'coatPet.required' => 'Por favor, selecione a pelagem do animal.',
            'profilePet.required' => 'Por favor, selecione o perfil do animal.',
            'provenancePet.required' => 'Por favor, selecione a procedência do animal.',


 

        ];
    }

}

