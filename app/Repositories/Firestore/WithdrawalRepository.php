<?php

namespace App\Repositories\Firestore;

class WithdrawalRepository extends BaseFirestoreRepository
{
    protected string $collection = 'withdrawal_requests';
}
