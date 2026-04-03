<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'items' => ['required', 'array', 'min:1'],
            'items.*.artwork_id' => ['required', 'string'],
            'items.*.quantity' => ['required', 'integer', 'min:1'],
            'buyer.name' => ['required', 'string', 'max:120'],
            'buyer.email' => ['required', 'email'],
            'buyer.phone' => ['required', 'string', 'max:25'],
            'shipping.address_line' => ['required', 'string'],
            'shipping.city' => ['required', 'string'],
            'shipping.postal_code' => ['required', 'string'],
            'total' => ['required', 'numeric', 'min:1'],
        ];
    }
}
