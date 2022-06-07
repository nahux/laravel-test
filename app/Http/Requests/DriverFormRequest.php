<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DriverFormRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'birth_date' => ['required', 'date'],
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'first_name' => strip_tags($this->first_name),
            'last_name' => strip_tags($this->last_name),
            'birth_date' => strip_tags($this->birth_date),
        ]);
    }
}
