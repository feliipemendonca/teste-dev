<?php

namespace App\Http\Requests;

use App\Rules\Phone;
use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
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
            'name'          => ['required'],
            'phone'         => ['required', new Phone],
            'age'           => ['required', 'regex:/^\d+$/'],
            'address'       => ['required'],
            'district'      => ['required'],
            'zip'           => ['required', 'min:9', 'max:9'],
            'city'          => ['required'],
            'state'         => ['required'],
            'complement'    => ['nullable'],
            'number'        => ['required', 'regex:/^\d+$/'],
        ];
    }

    /**
     * Get the custom validation messages.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required'             => 'O campo Nome é obrigatório',
            'phone.required'            => 'O campo Telefone é obrigatório',
            'age.required'              => 'O campo Idade é obrigatório',
            'age.regex'                 => 'O campo Idade deve conter apenas números',
            'zip.required'              => 'O campo Cep é obrigatório',
            'zip.min'                   => 'Digite cep válido',
            'zip.max'                   => 'Digite cep válido',
            'state.required'            => 'O campo Estado é obrigatório',
            'state.min'                 => 'Digite apenas UF',
            'state.max'                 => 'Digite apenas UF',
            'city.required'             => 'O campo Cidade é obrigatório',
            'number.required'           => 'O campo Número é obrigatório',
            'number.regex'              => 'O campo Número deve conter apenas números',
            'district.required'         => 'O campo Bairro é obrigatório',
            'address.required'          => 'O campo Endereço é obrigatório',
        ];
    }
}
