<?php

namespace App\Http\Requests\News;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'category_id' => ['required', 'integer', 'exists:categories.id'],
            'source_id' => ['required', 'integer', 'exists:sources.id'],
            'title' => ['required', 'string', 'min:3', 'max:200'],
            'author' => ['nullable', 'string', 'min:2', 'max:30'],
            'status' => ['required', 'string', 'min:5', 'max:7'],
            'image' => ['nullable', 'image', 'mimes:jpg,png'],
            'description' => ['nullable', 'string'],
            'text' => ['nullable', 'string']
        ];
    }
}
