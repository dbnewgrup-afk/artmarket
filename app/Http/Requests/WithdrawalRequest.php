<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WithdrawalRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'seller_id' => ['required', 'string'],
            'bank_account_id' => ['required', 'string'],
            'amount' => ['required', 'numeric', 'min:10000'],
        ];
    }
}
