<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCarRequest extends FormRequest
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
            'name' => ['nullable', 'string', 'max:200'],
            'year' => ['nullable', 'numeric', 'min:'.now()->subYears(100)->year, 'max:'.now()->year],
            'price' => ['nullable', 'numeric', 'min:0', 'max:999999'],
            'fee' => ['nullable', 'numeric', 'min:0', 'max:9999'],
        ];
    }
}
