<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentStoreRequest extends FormRequest
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
            'rga' => 'required|string|min:8|max:8',
            'date' => 'required',
            'time' => 'required',
            'location' => 'required',            
        ];
    }

    public function messages()
    {
        return [
            'rga.required' => 'Por favor, necessário informar o RGA.',
            'rga.min' => 'O campo RGA deve ter no mínimo :min caracteres.',
            'rga.max' => 'O campo RGA deve ter no mínimo :max caracteres.',

            'date.required' => 'Por favor, selecione uma data válida',
            'time.required' => 'Por favor, selecione um horário',
            'location.required'  => 'Seleciona o local da vacinação'
            

        ];
    }
}
