<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterVaccination extends FormRequest
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
            'rga' => 'required',
            'vaccine_id' => 'required',
            'dateVaccination' => 'required',
            'dose' => 'required',
            'lote' => 'required|string|min:5|max:5',
            
            'manufacturer_id' => 'required',
            'localVaccination' => 'required',
            'veterinarian_id' => 'required',
            'vaccinatorCRMV' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'rga.required' => 'Por favor, informe o RGA.',
            'vaccine_id.required' => 'Por favor, escolha uma vacina.',
            'dateVaccination.required' => 'Por favor, selecione a data da aplicaçao da vacina.',
            'dose.required' => 'Por favor, selecione a dosagem da vacinação.',
            'lote.required' => 'Por favor, informe o lote da vacina.',

            'manufacturer_id.required' => 'Por favor, escolha o fabricante.',
            'localVaccination.required' => 'Por favor, selecione o local da vacinação.',
            'veterinarian_id.required' => 'Por favor, escolha o profissional da saúde.',
            'vaccinatorCRMV.required' => 'Por favor, necessário o CRMV do veterinário.'

        ];
    }


}
