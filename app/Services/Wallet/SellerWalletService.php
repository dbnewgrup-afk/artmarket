<?php

namespace App\Services\Wallet;

use App\Enums\LedgerType;
use App\Repositories\Firestore\SellerLedgerRepository;

class SellerWalletService
{
    public function __construct(protected SellerLedgerRepository $ledgers)
    {
    }

    public function addLedgerEntry(string $sellerId, LedgerType $type, float $amount, array $meta = []): array
    {
        return $this->ledgers->create([
            'seller_id' => $sellerId,
            'type' => $type->value,
            'amount' => $amount,
            'reference_type' => $meta['reference_type'] ?? null,
            'reference_id' => $meta['reference_id'] ?? null,
            'status' => $meta['status'] ?? 'posted',
            'notes' => $meta['notes'] ?? null,
        ]);
    }

    public function getBalances(string $sellerId): array
    {
        $entries = $this->ledgers->all(['seller_id' => $sellerId], 500);

        $available = 0.0;
        $pending = 0.0;
        $withdrawn = 0.0;

        foreach ($entries as $entry) {
            $amount = (float) $entry['amount'];
            $type = $entry['type'];
            $status = $entry['status'] ?? 'posted';

            if ($status === 'pending') {
                $pending += $amount;
                continue;
            }

            if (in_array($type, [LedgerType::SALE_CREDIT->value, LedgerType::MANUAL_ADJUSTMENT->value], true)) {
                $available += $amount;
            } else {
                $available -= $amount;
            }

            if ($type === LedgerType::PAYOUT_DEBIT->value) {
                $withdrawn += $amount;
            }
        }

        return [
            'available_balance' => max($available, 0),
            'pending_balance' => max($pending, 0),
            'withdrawn_total' => max($withdrawn, 0),
        ];
    }
}
