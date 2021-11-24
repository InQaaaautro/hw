<?php

namespace App\Http\Controllers\Requests;

use App\Http\Requests\FormRequest;

class StoreScientificWorksFormRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'summary' => 'required',
            'published_at' => 'required'
        ];
    }
}
