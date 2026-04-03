<?php

namespace App\Enums;

enum OrderStatus: string
{
    case DRAFT = 'draft';
    case AWAITING_PAYMENT = 'awaiting_payment';
    case PAID = 'paid';
    case PROCESSING = 'processing';
    case SHIPPED = 'shipped';
    case DELIVERED = 'delivered';
    case COMPLETED = 'completed';
    case CANCELLED = 'cancelled';
    case DISPUTED = 'disputed';
}
