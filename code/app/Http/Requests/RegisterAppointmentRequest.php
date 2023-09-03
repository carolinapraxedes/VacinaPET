<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterAppointmentRequest extends FormRequest
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
            'rgaAppointment' => 'required|string|min:8|max:8',
            'dateAppointment' => 'required',
            'timeAppointment' => 'required',
            'localAppointment' => 'required',            
        ];
    }

    public function messages()
    {
        return [
            'rgaAppointment.required' => 'Por favor, necessário informar o RGA.',
            'rgaAppointment.min' => 'O campo RGA deve ter no mínimo :min caracteres.',
            'rgaAppointment.max' => 'O campo RGA deve ter no mínimo :max caracteres.',

            'dateAppointment.required' => 'Por favor, selecione uma data válida',
            'timeAppointment.required' => 'Por favor, selecione um horário',
            'localAppointment.required'  => 'Seleciona o local da vacinação'
            

        ];
    }

}
