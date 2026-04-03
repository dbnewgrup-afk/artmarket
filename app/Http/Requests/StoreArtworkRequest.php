<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArtworkRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:180'],
            'category_id' => ['required', 'string'],
            'description' => ['required', 'string'],
            'price' => ['required', 'numeric', 'min:1000'],
            'quantity' => ['required', 'integer', 'min:1'],
            'images' => ['required', 'array', 'min:1'],
            'status' => ['required', 'in:draft,pending_review'],
        ];
    }
}
