<?php

namespace App\Http\Controllers\Api;

use App\Enums\OrderStatus;
use App\Enums\PaymentStatus;
use App\Http\Requests\CheckoutRequest;
use App\Repositories\Firestore\OrderRepository;
use App\Services\Payments\XenditPaymentService;
use Illuminate\Support\Str;
use Illuminate\Http\JsonResponse;

class CheckoutController
{
    public function __construct(
        protected OrderRepository $orders,
        protected XenditPaymentService $payments,
    ) {
    }

    public function store(CheckoutRequest $request): JsonResponse
    {
        $order = $this->orders->create([
            'order_number' => 'AM-'.strtoupper(Str::random(10)),
            'buyer_id' => optional($request->user())->id,
            'guest_info' => $request->input('buyer'),
            'status' => OrderStatus::AWAITING_PAYMENT->value,
            'payment_status' => PaymentStatus::PENDING->value,
            'subtotal' => $request->input('total'),
            'fees' => 0,
            'total' => $request->input('total'),
            'shipping_address' => $request->input('shipping'),
            'notes' => $request->input('notes'),
            'items' => $request->input('items'),
        ]);

        $payment = $this->payments->createInvoiceForOrder($order);

        return response()->json([
            'order' => $order,
            'payment' => $payment,
        ], 201);
    }
}
