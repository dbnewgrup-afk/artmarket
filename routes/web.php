<?php

use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\Seller\SellerPageController;
use App\Http\Controllers\Web\StorefrontController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StorefrontController::class, 'index'])->name('home');
Route::view('/{spa?}', 'welcome')
    ->where('spa', 'artworks|artists|cart|checkout|checkout/success|account|account/orders|account/orders/.*|account/wishlist|about|faq|contact|terms|privacy')
    ->name('storefront.spa');

Route::prefix('seller')->middleware(['auth', 'role:seller'])->group(function () {
    Route::get('/', [SellerPageController::class, 'dashboard'])->name('seller.dashboard');
    Route::get('/artworks', [SellerPageController::class, 'artworks'])->name('seller.artworks');
    Route::get('/orders', [SellerPageController::class, 'orders'])->name('seller.orders');
    Route::get('/wallet', [SellerPageController::class, 'wallet'])->name('seller.wallet');
    Route::get('/withdrawals', [SellerPageController::class, 'withdrawals'])->name('seller.withdrawals');
    Route::get('/profile', [SellerPageController::class, 'profile'])->name('seller.profile');
});

Route::prefix('admin')->middleware(['auth', 'role:admin,super_admin'])->group(function () {
    Route::get('/', [AdminPageController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/sellers', [AdminPageController::class, 'sellers'])->name('admin.sellers');
    Route::get('/artworks', [AdminPageController::class, 'artworks'])->name('admin.artworks');
    Route::get('/orders', [AdminPageController::class, 'orders'])->name('admin.orders');
    Route::get('/payments', [AdminPageController::class, 'payments'])->name('admin.payments');
    Route::get('/withdrawals', [AdminPageController::class, 'withdrawals'])->name('admin.withdrawals');
    Route::get('/cms', [AdminPageController::class, 'cms'])->name('admin.cms');
    Route::get('/logs', [AdminPageController::class, 'logs'])->name('admin.logs');
});
