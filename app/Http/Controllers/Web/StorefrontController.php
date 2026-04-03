<?php

namespace App\Http\Controllers\Web;

use Illuminate\View\View;

class StorefrontController
{
    public function index(): View
    {
        return view('welcome', [
            'appShell' => [
                'name' => config('app.name', 'ArtMarket'),
                'description' => 'Curated multi-vendor art marketplace.',
            ],
        ]);
    }
}
