<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Phone implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @param  \Closure  $fail
     * @return void
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if ($value) {
            $onlyNumbers = preg_replace('/\D/', '', $value);

            if (!in_array(strlen($onlyNumbers), [10, 11])) {
                $fail('Digite um número válido.');
            }
        }
    }
}
