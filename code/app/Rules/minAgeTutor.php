<?php

namespace App\Rules;

use App\Models\RGA;
use Carbon\Carbon;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Date;

class minAgeTutor implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
       // Converte o valor (data de nascimento) para um objeto Carbon
       
        $dateOfBirth = Carbon::createFromFormat('Y-m-d', $value);
        $today = Carbon::now();

        // Calcula a diferença de anos
        $age = $dateOfBirth->diffInYears($today);
        
        // Verifica se a idade é menor que 18 anos
        return $age >= 18;

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'É necessário que o responsável pelo animal tenha 18 anos de idade.';
    }
}
