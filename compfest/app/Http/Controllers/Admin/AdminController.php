<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }

    public function dashboard(): View
    {
        return view('auth.admin.dashboard', [
            'title' => 'Admin Dashboard'
        ]);
    }
}