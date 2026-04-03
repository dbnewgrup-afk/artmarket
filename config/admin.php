<?php

return [
    'approval' => [
        'seller_auto_approve' => false,
        'artwork_auto_approve' => false,
    ],
    'commission_rate' => env('PLATFORM_COMMISSION_RATE', 0.1),
];
