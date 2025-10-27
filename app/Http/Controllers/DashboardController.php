<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;

class DashboardController extends Controller
{
    public function admin()
    {
        $phones = Phone::all();
        return view('dashboard.admin', compact('phones'));
    }

    public function user()
    {
        $phones = Phone::all();
        return view('dashboard.user', compact('phones'));
    }
}
