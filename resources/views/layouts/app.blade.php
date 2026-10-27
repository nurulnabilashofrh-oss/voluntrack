<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VolunTrack - Volunteer Management System</title>
    <!-- Memanggil CSS dari Laravel Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 font-sans antialiased">

    <div class="min-h-screen flex">
        <!-- Sidebar Navigasi Kiri -->
        <aside class="w-64 bg-emerald-800 text-white flex flex-col justify-between hidden md:flex shadow-lg">
            <div>
                <!-- Logo / Judul Aplikasi -->
                <div class="px-6 py-5 text-2xl font-bold tracking-wider border-b border-emerald-700 flex items-center space-x-2">
                    <span>🌱 VolunTrack</span>
                </div>

                <!-- Menu Navigasi -->
                <nav class="mt-6 px-4 space-y-2">
                    <a href="{{ route('dashboard') }}" class="block px-4 py-2.5 rounded-lg text-sm font-medium hover:bg-emerald-700 transition">
                        📊 Dashboard
                    </a>
                    <!-- Menu tambahan nanti bisa ditaruh di sini -->
                </nav>
            </div>

            <!-- Bagian Profil & Logout di Bawah Sidebar -->
            <div class="p-4 border-t border-emerald-700">
                <div class="mb-3 px-2 text-sm">
                    <p class="font-semibold truncate">{{ Auth::user()->name }}</p>
                    <p class="text-xs text-emerald-300 uppercase tracking-wider">Role: {{ Auth::user()->role }}</p>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full text-left px-4 py-2 rounded-lg text-sm font-medium text-red-200 hover:bg-red-600 hover:text-white transition">
                        🚪 Keluar (Logout)
                    </button>
                </form>
            </div>
        </aside>

        <!-- Konten Utama di Kanan -->
        <div class="flex-1 flex flex-col min-w-0 overflow-hidden">
            <!-- Header Atas (Mobile & Info) -->
            <header class="bg-white shadow-sm border-b border-gray-200 px-6 py-4 flex justify-between items-center">
                <h1 class="text-xl font-bold text-gray-800">Sistem Manajemen Relawan</h1>
                <span class="text-sm text-gray-500">Halo, {{ Auth::user()->name }}!</span>
            </header>

            <!-- Isi Halaman Dinamis -->
            <main class="flex-1 overflow-y-auto p-6">
                @yield('content')
            </main>
        </div>
    </div>

</body>
</html>