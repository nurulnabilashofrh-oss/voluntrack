<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ActivityController;

// Halaman Beranda
Route::get('/', function () {
    return view('welcome');
});

// Dashboard Relawan
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Profile Pengguna
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

// Program Aksi
Route::get('/program-aksi', [ActivityController::class, 'index'])
    ->name('activities.index');

// Membuat kegiatan baru untuk pengguna login
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/activities/create', [ActivityController::class, 'create'])
        ->name('activities.create');

    Route::post('/activities', [ActivityController::class, 'store'])
        ->name('activities.store');
});

// Halaman Tentang
Route::get('/tentang', function () {
    return view('tentang');
});

// Jalur Pendaftaran
Route::get('/jalur-daftar', function () {
    return view('jalur-daftar');
});

// Formulir Pendaftaran Relawan
Route::get('/formulir-pendaftaran', function () {
    return view('pendaftaran-form');
})->name('pendaftaran.program');

// Route untuk menampilkan formulir (GET)
Route::get('/formulir-pendaftaran', function () {
    return view('pendaftaran-form');
})->name('pendaftaran.program');

// Route untuk menerima kiriman data formulir (POST)
Route::post('/formulir-pendaftaran', function () {
    return redirect()->route('dashboard')->with('success', 'Pendaftaran berhasil dikirim!');
})->name('pendaftaran.store');

// Halaman FAQ
Route::get('/faq', function () {
    return view('faq');
})->name('faq');

// Halaman Status Pendaftaran Relawan
Route::get('/status-pendaftaran', function () {
    return view('dashboard.status-pendaftaran');
})->middleware(['auth', 'verified'])->name('statuspendaftaran');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/status-pendaftaran', function () {
        return view('dashboard.status-pendaftaran');
    })->name('status-pendaftaran');
});


Route::get('/riwayat-kegiatan', function () {
    return view('dashboard.riwayat-kegiatan');
})->middleware(['auth', 'verified'])->name('riwayat-kegiatan');

// Autentikasi Laravel
require __DIR__.'/auth.php';