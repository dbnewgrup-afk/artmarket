<?php

namespace App\Enums;

enum WithdrawalStatus: string
{
    case REQUESTED = 'requested';
    case UNDER_REVIEW = 'under_review';
    case APPROVED = 'approved';
    case PROCESSING = 'processing';
    case PAID = 'paid';
    case REJECTED = 'rejected';
    case FAILED = 'failed';
}
