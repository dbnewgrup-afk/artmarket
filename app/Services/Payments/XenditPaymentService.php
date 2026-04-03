<?php

namespace App\Services\Payments;

use App\Enums\OrderStatus;
use App\Enums\PaymentStatus;
use App\Repositories\Firestore\OrderRepository;
use App\Repositories\Firestore\PaymentRepository;
use App\Services\Xendit\XenditClient;

class XenditPaymentService
{
    public function __construct(
        protected XenditClient $xendit,
        protected PaymentRepository $payments,
        protected OrderRepository $orders,
    ) {
    }

    public function createInvoiceForOrder(array $order): array
    {
        $invoice = $this->xendit->createInvoice([
            'external_id' => $order['order_number'],
            'amount' => $order['total'],
            'payer_email' => data_get($order, 'guest_info.email'),
        ]);

        return $this->payments->create([
            'order_id' => $order['id'],
            'provider' => 'xendit',
            'payment_reference' => $invoice['id'],
            'amount' => $invoice['amount'],
            'status' => PaymentStatus::PENDING->value,
            'raw_payload' => $invoice,
        ]);
    }

    public function handleWebhook(array $payload, string $signature): array
    {
        if (! $this->xendit->verifyWebhookSignature($signature)) {
            abort(403, 'Invalid webhook signature');
        }

        $status = $this->mapPaymentStatus($payload['status'] ?? 'PENDING');

        $payment = $this->payments->update($payload['payment_id'], [
            'status' => $status,
            'raw_payload' => $payload,
            'paid_at' => $status === PaymentStatus::PAID->value ? now()->toIso8601String() : null,
        ]);

        if ($status === PaymentStatus::PAID->value) {
            $this->orders->update($payment['order_id'], [
                'payment_status' => PaymentStatus::PAID->value,
                'status' => OrderStatus::PAID->value,
            ]);
        }

        return $payment;
    }

    public function mapPaymentStatus(string $xenditStatus): string
    {
        return match (strtoupper($xenditStatus)) {
            'PAID', 'SETTLED' => PaymentStatus::PAID->value,
            'EXPIRED' => PaymentStatus::EXPIRED->value,
            'FAILED' => PaymentStatus::FAILED->value,
            default => PaymentStatus::PENDING->value,
        };
    }
}
