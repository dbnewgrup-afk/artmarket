<?php

namespace App\Enums;

enum UserRole: string
{
    case GUEST = 'guest';
    case BUYER = 'buyer';
    case SELLER = 'seller';
    case ADMIN = 'admin';
    case SUPER_ADMIN = 'super_admin';

    public function label(): string
    {
        return str_replace('_', ' ', ucwords($this->value, '_'));
    }
}
