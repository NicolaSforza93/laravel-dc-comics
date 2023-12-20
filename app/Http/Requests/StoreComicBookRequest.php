<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreComicBookRequest extends FormRequest
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
            'title' => 'required|max:100|min:5',
            'description' => 'nullable|min:20',
            'thumb' => 'required|max:255|url',
            'price' => 'required|numeric',
            'series' => 'required|max:100|min:3',
            'sale_date' => 'required|date',
            'type' => [
                'required',
                Rule::in(['comic book', 'graphic novel'])
            ],
        ];
    }
}
