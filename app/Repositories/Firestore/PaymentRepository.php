<?php

namespace App\Repositories\Firestore;

class PaymentRepository extends BaseFirestoreRepository
{
    protected string $collection = 'payments';
}
