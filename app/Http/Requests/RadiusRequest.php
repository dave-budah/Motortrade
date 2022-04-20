<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RadiusRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name' => ['required', 'max:100'],
            'description' => ['sometimes', 'max:200'],
        ];
    }

    public function name(): string
    {
        return $this->get('name');
    }

    public function description(): ?string
    {
        return $this->get('description');
    }
}
