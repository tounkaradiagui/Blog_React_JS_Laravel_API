<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:50'],
            'slug' => ['required', 'string', ],
            'description' => ['required', 'string', 'max:1500'],
            'image' => ['required', 'mimes:jpg,png,jpeg'],
            'meta_description' => ['required', 'string', 'max:500'],
            'meta_keywords' => ['required', 'string', 'max:500'],
            'meta_title' => ['required', 'string', 'max:500'],
            'status' => ['nullable'],
            'navbar_status' => ['nullable']
        ];
    }
}
