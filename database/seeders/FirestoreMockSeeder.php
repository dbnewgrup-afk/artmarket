<?php

namespace Database\Seeders;

use App\Enums\ArtworkStatus;
use App\Enums\SellerStatus;
use App\Enums\UserRole;

class FirestoreMockSeeder
{
    public static function data(): array
    {
        return [
            'users' => [
                ['id' => 'u_admin_1', 'role' => UserRole::SUPER_ADMIN->value, 'name' => 'Super Admin', 'email' => 'admin@artmarket.id'],
                ['id' => 'u_seller_1', 'role' => UserRole::SELLER->value, 'name' => 'Lukis Studio', 'email' => 'seller@artmarket.id'],
            ],
            'sellers' => [
                ['id' => 's_1', 'user_id' => 'u_seller_1', 'shop_name' => 'Lukis Studio', 'status' => SellerStatus::ACTIVE->value],
            ],
            'artworks' => [
                ['id' => 'a_1', 'seller_id' => 's_1', 'title' => 'Morning Gold', 'status' => ArtworkStatus::PUBLISHED->value, 'price' => 2500000],
            ],
        ];
    }
}
