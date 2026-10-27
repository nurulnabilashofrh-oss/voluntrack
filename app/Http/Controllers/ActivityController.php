<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Menampilkan daftar program aksi untuk publik.
     * Mendukung pencarian berdasarkan judul dan lokasi.
     */
    public function index(Request $request)
    {
        $query = Activity::query();

        // Fitur pencarian kegiatan
        if ($request->filled('search')) {
            $search = $request->input('search');

            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', '%' . $search . '%')
                  ->orWhere('location', 'like', '%' . $search . '%');
            });
        }

        // Mengurutkan kegiatan terbaru terlebih dahulu
        $activities = $query->latest()->get();

        return view('activities.index', compact('activities'));
    }

    /**
     * Menampilkan form untuk membuat kegiatan baru.
     * Hanya bisa diakses pengguna yang sudah login
     * sesuai middleware pada routes/web.php.
     */
    public function create()
    {
        return view('activities.create');
    }

    /**
     * Menyimpan kegiatan baru ke database.
     */
    public function store(Request $request)
    {
        // Validasi data kegiatan
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
            'date' => 'required|date',
            'capacity' => 'required|integer|min:1',
        ]);

        // Menyimpan data kegiatan
        Activity::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'location' => $validated['location'],
            'date' => $validated['date'],
            'capacity' => $validated['capacity'],
            'user_id' => auth()->id(),
        ]);

        // Kembali ke dashboard dengan pesan berhasil
        return redirect()
            ->route('dashboard')
            ->with('success', 'Kegiatan sosial berhasil ditambahkan!');
    }
}