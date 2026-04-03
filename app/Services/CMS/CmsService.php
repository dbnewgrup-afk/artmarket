<?php

namespace App\Services\CMS;

use App\Services\Firestore\FirestoreClient;

class CmsService
{
    public function __construct(protected FirestoreClient $firestore)
    {
    }

    public function homepageContent(): array
    {
        return [
            'banners' => $this->firestore->query('banners', ['is_active' => true], 10),
            'featured_sections' => $this->firestore->query('featured_sections', [], 10),
            'cms_pages' => $this->firestore->query('cms_pages', ['location' => 'home'], 10),
        ];
    }
}
