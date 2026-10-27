<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Buku Panduan Relawan - VolunTrack</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=plus-jakarta-sans:400,500,600,700,800&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #0b132b; color: #f8fafc; }
        </style>
    </head>
    <body class="antialiased">

        <!-- Navbar -->
        <header class="sticky top-0 z-50 bg-[#0b132b] border-b border-slate-800 shadow-sm">
            <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
                <a href="/" class="flex items-center space-x-3.5 group">
                    <img src="{{ asset('images/logo-icon.png') }}" alt="VolunTrack Icon" class="h-12 w-auto object-contain">
                    <span class="text-2xl font-extrabold text-white tracking-tight">
                        Volun<span class="text-emerald-500">Track</span>
                    </span>
                </a>
                <a href="/" class="text-sm font-semibold text-emerald-400 hover:underline">&larr; Kembali ke Beranda</a>
            </div>
        </header>

        <!-- Konten Buku Panduan -->
        <main class="max-w-4xl mx-auto px-6 py-12 space-y-10">
            
            <div class="text-center space-y-4">
                <span class="px-3.5 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 text-xs font-bold uppercase tracking-wider">
                    BUKU PANDUAN RESMI
                </span>
                <h1 class="text-3xl sm:text-5xl font-extrabold text-white">Panduan Pendaftaran & Kegiatan Relawan</h1>
                <p class="text-slate-300 text-base max-w-2xl mx-auto">
                    Pelajari tata cara pendaftaran, persyaratan, serta alur kegiatan kemanusiaan bersama VolunTrack dari awal hingga pemberangkatan ekspedisi.
                </p>
            </div>

            <!-- Daftar Isi / Bab Panduan -->
            <div class="bg-slate-900 border border-slate-800 rounded-3xl p-8 space-y-8 shadow-xl">
                
                <div class="border-b border-slate-800 pb-6 space-y-3">
                    <h2 class="text-xl font-bold text-emerald-400">Bab 1: Persyaratan Umum Relawan</h2>
                    <p class="text-slate-300 text-sm leading-relaxed">
                        Setiap pendaftar wajib Warga Negara Indonesia (WNI) berusia minimal 17 tahun, memiliki komitmen tinggi terhadap kegiatan sosial, sehat jasmani dan rohani, serta siap mengikuti seluruh rangkaian kegiatan ekspedisi.
                    </p>
                </div>

                <div class="border-b border-slate-800 pb-6 space-y-3">
                    <h2 class="text-xl font-bold text-emerald-400">Bab 2: Alur Pendaftaran Jalur Aksi</h2>
                    <ol class="list-decimal list-inside text-slate-300 text-sm space-y-2 leading-relaxed">
                        <li>Mengakses halaman <strong class="text-white">Jalur Pendaftaran</strong> di beranda VolunTrack.</li>
                        <li>Mengisi formulir data diri dengan lengkap sesuai KTP.</li>
                        <li>Memilih program aksi sosial atau ekspedisi yang diminati.</li>
                        <li>Menunggu pengumuman seleksi administrasi melalui WhatsApp / Email aktif.</li>
                    </ol>
                </div>

                <div class="space-y-3">
                    <h2 class="text-xl font-bold text-emerald-400">Bab 3: Hak & Kewajiban Relawan</h2>
                    <p class="text-slate-300 text-sm leading-relaxed">
                        Relawan berhak mendapatkan atribut resmi, sertifikat pengabdian nasional, serta pelatihan kepemimpinan. Kewajiban relawan adalah mematuhi kode etik organisasi dan menjaga nama baik program aksi sosial.
                    </p>
                </div>

            </div>

            <!-- Tombol Unduh / Kembali -->
            <div class="text-center pt-4">
                <a href="{{ url('/') }}" class="inline-block px-8 py-4 bg-orange-600 hover:bg-orange-700 text-white font-extrabold rounded-2xl shadow-lg transition">
                    Kembali ke Beranda & Daftar Sekarang 🚀
                </a>
            </div>

        </main>

    </body>
</html>