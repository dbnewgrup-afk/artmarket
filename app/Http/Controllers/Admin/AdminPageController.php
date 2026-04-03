<?php

namespace App\Http\Controllers\Admin;

use Illuminate\View\View;

class AdminPageController
{
    public function dashboard(): View { return view('admin.dashboard'); }
    public function sellers(): View { return view('admin.sellers'); }
    public function artworks(): View { return view('admin.artworks'); }
    public function orders(): View { return view('admin.orders'); }
    public function payments(): View { return view('admin.payments'); }
    public function withdrawals(): View { return view('admin.withdrawals'); }
    public function cms(): View { return view('admin.cms'); }
    public function logs(): View { return view('admin.logs'); }
}
