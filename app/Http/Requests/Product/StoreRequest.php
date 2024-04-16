<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }


    protected function prepareForValidation(): void
    {
        $this->merge([
            'special' => (bool)$this->input('special'),
            'active' => (bool)$this->input('active'),
        ]);

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'categories' => 'nullable|array',
            'image' => 'nullable|image',
            'sort' => 'nullable|integer',
            'description' => 'nullable|string',
            'price' => 'nullable|decimal:0,2',
            'special' => 'boolean',
            'active' => 'boolean',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Введите название категории меню',
        ];
    }
}
