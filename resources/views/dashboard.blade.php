<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard - VolunTrack Volunteer Management System</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=plus-jakarta-sans:400,500,600,700,800&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            body { 
                font-family: 'Plus Jakarta Sans', sans-serif; 
                background-color: #f8fafc; 
                color: #0f172a; 
                margin: 0; 
            }
        </style>
    </head>
    <body>
        <div style="display: flex; min-height: 100vh;">
            
            <!-- Sidebar Kiri (Hijau Emerald Sesuai Referensi) -->
            <aside style="width: 260px; background-color: #046a38; color: #ffffff; display: flex; flex-direction: column; justify-content: space-between; padding: 24px 18px; box-shadow: 4px 0 15px rgba(0,0,0,0.05); flex-shrink: 0;">
                
                <div style="display: flex; flex-direction: column; gap: 28px;">
                    <!-- Logo & Brand Resmi VolunTrack -->
                    <a href="{{ url('/') }}" style="display: flex; align-items: center; gap: 12px; text-decoration: none; padding-left: 6px;">
                        <img src="{{ asset('images/logo-icon.png') }}" alt="VolunTrack Icon" style="height: 40px; width: auto; object-fit: contain;">
                        <span style="font-size: 22px; font-weight: 800; color: #ffffff; letter-spacing: -0.02em;">
                            Volun<span style="color: #34d399;">Track</span>
                        </span>
                    </a>

                    <!-- Navigasi Menu Sidebar -->
                    <nav style="display: flex; flex-direction: column; gap: 6px;">
                        <a href="{{ url('/dashboard') }}" style="display: flex; align-items: center; gap: 12px; padding: 12px 16px; background-color: rgba(255, 255, 255, 0.15); border-radius: 12px; font-weight: 700; color: #ffffff; text-decoration: none; font-size: 14px;">
                            <span style="font-size: 16px;">📊</span> <span>Dashboard</span>
                        </a>

                        <a href="{{ route('profile.edit') }}" style="display: flex; align-items: center; gap: 12px; padding: 12px 16px; border-radius: 12px; font-weight: 600; color: #d1fae5; text-decoration: none; font-size: 14px; transition: background 0.2s;" onmouseover="this.style.backgroundColor='rgba(255,255,255,0.08)'" onmouseout="this.style.backgroundColor='transparent'">
                            <span style="font-size: 16px;">👤</span> <span>Profile Saya</span>
                        </a>

                        <a href="{{ url('/jalur-daftar') }}" style="display: flex; align-items: center; gap: 12px; padding: 12px 16px; border-radius: 12px; font-weight: 600; color: #d1fae5; text-decoration: none; font-size: 14px; transition: background 0.2s;" onmouseover="this.style.backgroundColor='rgba(255,255,255,0.08)'" onmouseout="this.style.backgroundColor='transparent'">
                            <span style="font-size: 16px;">📝</span> <span>Status Pendaftaran</span>
                        </a>

                        <a href="#" style="display: flex; align-items: center; gap: 12px; padding: 12px 16px; border-radius: 12px; font-weight: 600; color: #d1fae5; text-decoration: none; font-size: 14px; transition: background 0.2s;" onmouseover="this.style.backgroundColor='rgba(255,255,255,0.08)'" onmouseout="this.style.backgroundColor='transparent'">
                            <span style="font-size: 16px;">📜</span> <span>Riwayat Kegiatan</span>
                        </a>
                    </nav>
                </div>

                <!-- User Info & Logout -->
                <div style="border-top: 1px solid rgba(255, 255, 255, 0.15); padding-top: 16px; display: flex; flex-direction: column; gap: 12px;">
                    <div>
                        <h4 style="font-size: 14px; font-weight: 700; color: #ffffff; margin: 0; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                            {{ Auth::user()->name ?? 'Nurul Nabila Shofuroh' }}
                        </h4>
                        <span style="font-size: 11px; font-weight: 700; color: #a7f3d0; text-transform: uppercase; letter-spacing: 0.05em;">
                            ROLE: VOLUNTEER
                        </span>
                    </div>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" style="width: 100%; display: flex; align-items: center; gap: 8px; padding: 10px 14px; background-color: rgba(0, 0, 0, 0.15); border: none; border-radius: 10px; color: #ffffff; font-size: 13px; font-weight: 700; cursor: pointer; transition: background 0.2s;" onmouseover="this.style.backgroundColor='rgba(0,0,0,0.25)'" onmouseout="this.style.backgroundColor='rgba(0,0,0,0.15)'">
                            <span>🚪</span> <span>Keluar (Logout)</span>
                        </button>
                    </form>
                </div>

            </aside>

            <!-- Area Konten Utama -->
            <main style="flex: 1; display: flex; flex-direction: column; overflow-y: auto;">
                
                <!-- Header Banner Atas (Sesuai Layout Abound Food Care) -->
                <header style="background-color: #ffffff; border-bottom: 1px solid #e2e8f0; padding: 24px 36px; display: flex; align-items: center; justify-content: space-between;">
                    
                    <!-- Ucapan Profil -->
                    <div style="display: flex; align-items: center; gap: 16px;">
                        <img src="{{ asset('images/logo-icon.png') }}" alt="Avatar" style="width: 52px; height: 52px; border-radius: 50%; background-color: #f0fdf4; padding: 6px; border: 1px solid #bbf7d0; object-fit: contain;">
                        <div>
                            <h2 style="font-size: 20px; font-weight: 800; color: #0f172a; margin: 0 0 2px 0;">
                                Selamat Datang Kembali, {{ Auth::user()->name ?? 'Nurul Nabila' }}!
                            </h2>
                            <p style="font-size: 13px; color: #64748b; margin: 0; font-weight: 500;">
                                Pusat kendali aksi sosial dan status partisipasi relawanmu.
                            </p>
                        </div>
                    </div>

                    <!-- Ringkasan Angka Kanan -->
                    <div style="display: flex; align-items: center; gap: 32px;">
                        <div style="text-align: right;">
                            <span style="font-size: 11px; font-weight: 700; color: #64748b; text-transform: uppercase;">Total Kegiatan</span>
                            <div style="font-size: 22px; font-weight: 800; color: #046a38;">9 Program</div>
                        </div>
                        <div style="height: 36px; width: 1px; background-color: #cbd5e1;"></div>
                        <div style="text-align: right;">
                            <span style="font-size: 11px; font-weight: 700; color: #64748b; text-transform: uppercase;">Total Relawan</span>
                            <div style="font-size: 22px; font-weight: 800; color: #ea580c;">230 Relawan</div>
                        </div>
                    </div>

                </header>

                <!-- Grid Konten Dashboard (Kolom Kiri & Kanan) -->
                <div style="padding: 32px; display: grid; grid-template-columns: 2fr 1fr; gap: 28px;">
                    
                    <!-- Kolom Kiri: Upcoming Events & Notifications -->
                    <div style="display: flex; flex-direction: column; gap: 28px;">
                        
                        <!-- Seksi: Upcoming Events (Kegiatan Mendatang) -->
                        <div style="background-color: #ffffff; border: 1px solid #e2e8f0; border-radius: 20px; padding: 24px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.02);">
                            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px; border-bottom: 1px solid #f1f5f9; padding-bottom: 12px;">
                                <h3 style="font-size: 18px; font-weight: 800; color: #0f172a; margin: 0;">Kegiatan Mendatang (Upcoming Events)</h3>
                                <a href="{{ route('activities.index') }}" style="font-size: 12px; font-weight: 700; color: #046a38; text-decoration: none;">Lihat Semua →</a>
                            </div>

                            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px;">
                                
                                <!-- Card Item 1 -->
                                <div style="background-color: #f8fafc; border: 1px solid #e2e8f0; border-radius: 14px; padding: 16px;">
                                    <span style="font-size: 11px; font-weight: 800; color: #046a38; background-color: #d1fae5; padding: 3px 8px; border-radius: 6px;">Pelestarian</span>
                                    <h4 style="font-size: 14px; font-weight: 700; color: #0f172a; margin: 10px 0 6px 0;">Konservasi Mangrove</h4>
                                    <p style="font-size: 12px; color: #64748b; margin: 0;">📅 15 November 2026<br>⏰ 08:00 - 14:00 WIB</p>
                                </div>

                                <!-- Card Item 2 -->
                                <div style="background-color: #f8fafc; border: 1px solid #e2e8f0; border-radius: 14px; padding: 16px;">
                                    <span style="font-size: 11px; font-weight: 800; color: #2563eb; background-color: #dbeafe; padding: 3px 8px; border-radius: 6px;">Pendidikan</span>
                                    <h4 style="font-size: 14px; font-weight: 700; color: #0f172a; margin: 10px 0 6px 0;">Kelas Inspirasi 3T</h4>
                                    <p style="font-size: 12px; color: #64748b; margin: 0;">📅 22 November 2026<br>⏰ 09:00 - 15:00 WIB</p>
                                </div>

                                <!-- Card Item 3 -->
                                <div style="background-color: #f8fafc; border: 1px solid #e2e8f0; border-radius: 14px; padding: 16px;">
                                    <span style="font-size: 11px; font-weight: 800; color: #ea580c; background-color: #ffedd5; padding: 3px 8px; border-radius: 6px;">Kesehatan</span>
                                    <h4 style="font-size: 14px; font-weight: 700; color: #0f172a; margin: 10px 0 6px 0;">Bakti Sehat Desa</h4>
                                    <p style="font-size: 12px; color: #64748b; margin: 0;">📅 05 Desember 2026<br>⏰ 07:30 - 12:00 WIB</p>
                                </div>

                            </div>
                        </div>

                        <!-- Seksi: Notifications (Pengumuman & Pemberitahuan) -->
                        <div style="background-color: #ffffff; border: 1px solid #e2e8f0; border-radius: 20px; padding: 24px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.02);">
                            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px; border-bottom: 1px solid #f1f5f9; padding-bottom: 12px;">
                                <h3 style="font-size: 18px; font-weight: 800; color: #0f172a; margin: 0;">Pemberitahuan (Notifications)</h3>
                                <span style="font-size: 12px; font-weight: 700; color: #64748b;">Terbaru</span>
                            </div>

                            <div style="display: flex; flex-direction: column; gap: 14px;">
                                
                                <div style="display: flex; align-items: flex-start; gap: 12px; padding: 12px; background-color: #f0fdf4; border-radius: 12px; border: 1px solid #bbf7d0;">
                                    <span style="font-size: 18px;">📢</span>
                                    <div style="flex: 1;">
                                        <h5 style="font-size: 13px; font-weight: 700; color: #065f46; margin: 0 0 2px 0;">Pendaftaran Ekspedisi Papua Batch 14 Dibuka!</h5>
                                        <p style="font-size: 12px; color: #047857; margin: 0;">Segera pilih jalur partisipasimu dan kirimkan formulir sebelum batas waktu akhir.</p>
                                    </div>
                                    <a href="{{ url('/jalur-daftar') }}" style="font-size: 12px; font-weight: 700; color: #ea580c; text-decoration: none;">Daftar →</a>
                                </div>

                                <div style="display: flex; align-items: flex-start; gap: 12px; padding: 12px; background-color: #f8fafc; border-radius: 12px; border: 1px solid #e2e8f0;">
                                    <span style="font-size: 18px;">💡</span>
                                    <div style="flex: 1;">
                                        <h5 style="font-size: 13px; font-weight: 700; color: #0f172a; margin: 0 0 2px 0;">Unduh Buku Panduan Relawan</h5>
                                        <p style="font-size: 12px; color: #64748b; margin: 0;">Panduan pelaksanaan dan persyaratan berkas aksi sosial VolunTrack telah diperbarui.</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <!-- Kolom Kanan: Past Events (Riwayat Kegiatan) -->
                    <div style="display: flex; flex-direction: column; gap: 28px;">
                        
                        <div style="background-color: #ffffff; border: 1px solid #e2e8f0; border-radius: 20px; padding: 24px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.02);">
                            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px; border-bottom: 1px solid #f1f5f9; padding-bottom: 12px;">
                                <h3 style="font-size: 18px; font-weight: 800; color: #0f172a; margin: 0;">Riwayat (Past Events)</h3>
                            </div>

                            <div style="display: flex; flex-direction: column; gap: 16px;">
                                
                                <div style="border-bottom: 1px solid #f1f5f9; padding-bottom: 12px;">
                                    <h4 style="font-size: 13px; font-weight: 700; color: #0f172a; margin: 0 0 4px 0;">Ekspedisi Sapa Papua #7</h4>
                                    <p style="font-size: 11px; color: #64748b; margin: 0;">📅 10 Oktober 2026<br>📍 Raja Ampat, Papua Barat</p>
                                </div>

                                <div style="border-bottom: 1px solid #f1f5f9; padding-bottom: 12px;">
                                    <h4 style="font-size: 13px; font-weight: 700; color: #0f172a; margin: 0 0 4px 0;">Aksi Tanam 1.000 Pohon</h4>
                                    <p style="font-size: 11px; color: #64748b; margin: 0;">📅 24 Agustus 2026<br>📍 Merbabu, Jawa Tengah</p>
                                </div>

                                <div>
                                    <h4 style="font-size: 13px; font-weight: 700; color: #0f172a; margin: 0 0 4px 0;">Ramadhan Berbagi Dhuafa</h4>
                                    <p style="font-size: 11px; color: #64748b; margin: 0;">📅 12 April 2026<br>📍 Jakarta Selatan</p>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

            </main>

        </div>
    </body>
</html>