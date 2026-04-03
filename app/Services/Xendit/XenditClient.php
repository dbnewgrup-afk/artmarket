<?php

namespace App\Services\Xendit;

use Illuminate\Support\Str;

class XenditClient
{
    public function createInvoice(array $payload): array
    {
        return [
            'id' => 'inv_'.Str::random(12),
            'external_id' => $payload['external_id'],
            'amount' => $payload['amount'],
            'status' => 'PENDING',
            'invoice_url' => 'https://checkout.xendit.co/mock/'.Str::random(16),
            'raw' => $payload,
        ];
    }

    public function verifyWebhookSignature(string $signature): bool
    {
        return ! empty($signature);
    }
}
