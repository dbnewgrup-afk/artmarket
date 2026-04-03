<?php

namespace App\Policies;

class ArtworkPolicy
{
    public function manage(object $user, array $artwork): bool
    {
        return $user->role === 'seller' && $user->seller_id === ($artwork['seller_id'] ?? null);
    }

    public function moderate(object $user): bool
    {
        return in_array($user->role, ['admin', 'super_admin'], true);
    }
}
