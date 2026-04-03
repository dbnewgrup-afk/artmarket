<?php

namespace App\Repositories\Firestore;

class OrderRepository extends BaseFirestoreRepository
{
    protected string $collection = 'orders';
}
