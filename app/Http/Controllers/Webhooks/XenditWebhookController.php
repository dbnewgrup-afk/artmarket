<?php

namespace App\Http\Controllers\Webhooks;

use App\Services\Payments\XenditPaymentService;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class XenditWebhookController
{
    public function __construct(protected XenditPaymentService $service)
    {
    }

    public function __invoke(Request $request): JsonResponse
    {
        $result = $this->service->handleWebhook(
            payload: $request->all(),
            signature: (string) $request->header('x-callback-token'),
        );

        return response()->json(['ok' => true, 'payment' => $result]);
    }
}
