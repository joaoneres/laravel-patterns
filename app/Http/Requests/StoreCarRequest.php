<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:200'],
            'year' => ['required', 'numeric', 'min:'.now()->subYears(100)->year, 'max:'.now()->year],
            'price' => ['required', 'numeric', 'min:0', 'max:999999'],
            'fee' => ['required', 'numeric', 'min:0', 'max:9999'],
        ];
    }
}
