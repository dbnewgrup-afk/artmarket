# ArtMarket Rebuild Foundation (Laravel 11 + Blade + React SPA)

Fondasi implementasi marketplace seni multi-role dengan:
- Public storefront React SPA via Vite (mounted di Blade `welcome.blade.php`)
- Seller panel berbasis Blade
- Admin panel berbasis Blade
- Firestore repository abstraction
- Xendit payment service abstraction
- Ledger-based seller wallet dan withdrawal flow

## Struktur Utama
- `app/Enums`: konsistensi status domain
- `app/Http/Controllers`: Web, API, Seller, Admin, Webhooks
- `app/Http/Middleware/EnsureUserHasRole.php`: role guard
- `app/Repositories/Firestore`: repository abstraction per collection
- `app/Services`: Firestore, Payments, Xendit, Wallet, Withdrawals
- `resources/views`: shell + page template public/seller/admin + reusable UI components
- `resources/js/src`: React SPA storefront entry + pages
- `routes/web.php` + `routes/api.php`

## Catatan
Implementasi Firestore dan Xendit saat ini mock-friendly namun sudah mengikuti kontrak service agar mudah diganti ke integrasi real production.
