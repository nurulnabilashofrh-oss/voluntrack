<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // Ambil data user yang sedang login saat ini
        $user = Auth::user();

        // Cek rolenya apa, lalu arahkan ke tampilan yang sesuai
        if ($user->role === 'admin') {
            return view('dashboard.admin');
        } elseif ($user->role === 'organizer') {
            return view('dashboard.organizer');
        } else {
            return view('dashboard.volunteer');
        }
    }
}