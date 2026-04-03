<?php

namespace App\Services\Withdrawals;

use App\Enums\LedgerType;
use App\Enums\WithdrawalStatus;
use App\Repositories\Firestore\WithdrawalRepository;
use App\Services\Wallet\SellerWalletService;

class WithdrawalService
{
    public function __construct(
        protected WithdrawalRepository $withdrawals,
        protected SellerWalletService $wallet,
    ) {
    }

    public function request(array $payload): array
    {
        $balances = $this->wallet->getBalances($payload['seller_id']);

        if ($payload['amount'] <= 0 || $payload['amount'] > $balances['available_balance']) {
            abort(422, 'Invalid withdrawal amount.');
        }

        return $this->withdrawals->create([
            'seller_id' => $payload['seller_id'],
            'bank_account_id' => $payload['bank_account_id'],
            'amount' => $payload['amount'],
            'status' => WithdrawalStatus::REQUESTED->value,
            'requested_at' => now()->toIso8601String(),
        ]);
    }

    public function markPaid(array $withdrawal): array
    {
        $updated = $this->withdrawals->update($withdrawal['id'], [
            'status' => WithdrawalStatus::PAID->value,
            'paid_at' => now()->toIso8601String(),
        ]);

        $this->wallet->addLedgerEntry(
            sellerId: $withdrawal['seller_id'],
            type: LedgerType::PAYOUT_DEBIT,
            amount: (float) $withdrawal['amount'],
            meta: [
                'reference_type' => 'withdrawal',
                'reference_id' => $withdrawal['id'],
                'notes' => 'Seller payout processed',
            ],
        );

        return $updated;
    }
}
