<?php

namespace App\Enums;

enum LedgerType: string
{
    case SALE_CREDIT = 'sale_credit';
    case COMMISSION_DEBIT = 'commission_debit';
    case REFUND_DEBIT = 'refund_debit';
    case PAYOUT_DEBIT = 'payout_debit';
    case MANUAL_ADJUSTMENT = 'manual_adjustment';
}
