<?php

namespace Inani\LaravelNovaConfiguration\Http;

use Illuminate\Foundation\Http\FormRequest;

class CreateConfigurationRequest extends FormRequest
{
    /**
     *
     * @return array
     */
    public function rules()
    {
        return [
            'key' => 'required|unique:laravel_nova_configurations,key',
            'value' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'key.unique' => 'The key is already used',
            'value.unique' => 'The value is required',
        ];
    }
}