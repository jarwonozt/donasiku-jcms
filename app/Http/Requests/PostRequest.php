<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PostRequest extends FormRequest
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
            'title' => 'required|string',
            'slug' => [
                'string',
                Rule::unique('posts', 'slug')->ignore($this->post), // Ignore current post when checking uniqueness
            ],
            'category_id' => 'required|numeric',
            'preview' => 'required|string',
            'content' => 'required|string',
            'image' => 'required|url',
            'status' => 'required|string|in:active,inactive',
            'tags' => 'required|array',
            'tags.*' => 'numeric',
        ];
    }
}
