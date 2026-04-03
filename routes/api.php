<?php

use App\Http\Controllers\Api\CheckoutController;
use App\Http\Controllers\Webhooks\XenditWebhookController;
use Illuminate\Support\Facades\Route;

Route::post('/checkout', [CheckoutController::class, 'store']);
Route::post('/webhooks/xendit', XenditWebhookController::class);
