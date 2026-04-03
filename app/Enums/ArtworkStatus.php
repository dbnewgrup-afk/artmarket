<?php

namespace App\Enums;

enum ArtworkStatus: string
{
    case DRAFT = 'draft';
    case PENDING_REVIEW = 'pending_review';
    case PUBLISHED = 'published';
    case HIDDEN = 'hidden';
    case SOLD = 'sold';
    case ARCHIVED = 'archived';
    case REJECTED = 'rejected';
}
