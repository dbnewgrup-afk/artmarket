<?php

namespace App\Http\Controllers\Seller;

use Illuminate\View\View;

class SellerPageController
{
    public function dashboard(): View { return view('seller.dashboard'); }
    public function artworks(): View { return view('seller.artworks'); }
    public function orders(): View { return view('seller.orders'); }
    public function wallet(): View { return view('seller.wallet'); }
    public function withdrawals(): View { return view('seller.withdrawals'); }
    public function profile(): View { return view('seller.profile'); }
}
