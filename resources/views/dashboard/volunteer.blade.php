<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard Relawan - VolunTrack</title>
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

            /* Animasi Berdetak untuk Notifikasi */
            @keyframes pulse-glow {
                0% {
                    box-shadow: 0 10px 25px -5px rgba(234, 88, 12, 0.25), 0 0 0 0px rgba(234, 88, 12, 0.4);
                }
                50% {
                    box-shadow: 0 15px 30px -5px rgba(234, 88, 12, 0.4), 0 0 0 8px rgba(234, 88, 12, 0);
                }
                100% {
                    box-shadow: 0 10px 25px -5px rgba(234, 88, 12, 0.25), 0 0 0 0px rgba(234, 88, 12, 0);
                }
            }

            .pulse-card {
                animation: pulse-glow 2s infinite ease-in-out;
            }

            /* Efek Card Pop-Up Shadow Global */
            .popup-card {
                background-color: #ffffff;
                border: 1px solid #e2e8f0;
                border-radius: 20px;
                box-shadow: 0 10px 30px -10px rgba(15, 23, 42, 0.08), 0 4px 6px -2px rgba(15, 23, 42, 0.03);
                transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            }

            .popup-card:hover {
                transform: translateY(-4px);
                box-shadow: 0 20px 35px -10px rgba(15, 23, 42, 0.12), 0 8px 10px -4px rgba(15, 23, 42, 0.04);
            }

            /* Efek Pop-Up Mini Card untuk Item Kegiatan */
            .item-card {
                background-color: #ffffff;
                border: 1.5px solid #f1f5f9;
                border-radius: 16px;
                padding: 16px;
                box-shadow: 0 4px 12px rgba(15, 23, 42, 0.03);
                transition: all 0.25s ease-in-out;
            }

            .item-card:hover {
                transform: translateY(-3px);
                border-color: #cbd5e1;
                box-shadow: 0 10px 20px -5px rgba(15, 23, 42, 0.08);
            }

            /* Style Timer Digital */
            .timer-box {
                background: #0f172a;
                color: #f97316;
                font-weight: 800;
                font-size: 16px;
                padding: 6px 12px;
                border-radius: 8px;
                display: inline-flex;
                flex-direction: column;
                align-items: center;
                min-width: 44px;
                box-shadow: inset 0 2px 4px rgba(0,0,0,0.5);
            }
            .timer-label {
                font-size: 9px;
                color: #94a3b8;
                font-weight: 700;
                text-transform: uppercase;
            }
        </style>
    </head>
    <body>
        <div style="display: flex; min-height: 100vh;">
            
            <!-- Sidebar Kiri Modern -->
            <aside style="width: 260px; background-color: #046a38; color: #ffffff; display: flex; flex-direction: column; justify-content: space-between; padding: 24px 18px; box-shadow: 4px 0 15px rgba(0,0,0,0.05); flex-shrink: 0;">
                
                <div style="display: flex; flex-direction: column; gap: 28px;">
                    <!-- Logo Resmi VolunTrack -->
                    <a href="{{ url('/') }}" style="display: flex; align-items: center; gap: 12px; text-decoration: none; padding-left: 6px;">
                        <img src="{{ asset('images/logo-icon.png') }}" alt="VolunTrack Icon" style="height: 40px; width: auto; object-fit: contain;">
                        <span style="font-size: 22px; font-weight: 800; color: #ffffff; letter-spacing: -0.02em;">
                            Volun<span style="color: #34d399;">Track</span>
                        </span>
                    </a>

                    <!-- Navigasi Menu Sidebar Modern -->
                    <!-- Navigasi Menu Sidebar Modern dengan Program Aksi -->
<nav style="display: flex; flex-direction: column; gap: 6px;">
    <a href="{{ url('/dashboard') }}" style="display: flex; align-items: center; gap: 12px; padding: 12px 16px; border-radius: 12px; font-weight: 600; color: #d1fae5; text-decoration: none; font-size: 14px; transition: background 0.2s;" onmouseover="this.style.backgroundColor='rgba(255,255,255,0.08)'" onmouseout="this.style.backgroundColor='transparent'">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="9"/><rect x="14" y="3" width="7" height="5"/><rect x="14" y="12" width="7" height="9"/><rect x="3" y="16" width="7" height="5"/></svg>
        <span>Dashboard</span>
    </a>

    <a href="{{ route('profile.edit') }}" style="display: flex; align-items: center; gap: 12px; padding: 12px 16px; border-radius: 12px; font-weight: 600; color: #d1fae5; text-decoration: none; font-size: 14px; transition: background 0.2s;" onmouseover="this.style.backgroundColor='rgba(255,255,255,0.08)'" onmouseout="this.style.backgroundColor='transparent'">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
        <span>Profile Saya</span>
    </a>

    <a href="{{ url('status-pendaftaran') }}" style="display: flex; align-items: center; gap: 12px; padding: 12px 16px; border-radius: 12px; font-weight: 600; color: #d1fae5; text-decoration: none; font-size: 14px; transition: background 0.2s;" onmouseover="this.style.backgroundColor='rgba(255,255,255,0.08)'" onmouseout="this.style.backgroundColor='transparent'">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
        <span>Status Pendaftaran</span>
    </a>


    <a href="#" style="display: flex; align-items: center; gap: 12px; padding: 12px 16px; border-radius: 12px; font-weight: 600; color: #d1fae5; text-decoration: none; font-size: 14px; transition: background 0.2s;" onmouseover="this.style.backgroundColor='rgba(255,255,255,0.08)'" onmouseout="this.style.backgroundColor='transparent'">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
        <span>Riwayat Kegiatan</span>
    </a>
</nav>

                </div>

                <!-- Profil Info & Logout Modern -->
                <div style="border-top: 1px solid rgba(255, 255, 255, 0.15); padding-top: 16px; display: flex; flex-direction: column; gap: 14px;">
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
                        <button type="submit" 
                            style="width: 100%; display: flex; align-items: center; justify-content: center; gap: 10px; padding: 12px 16px; background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%); border: none; border-radius: 12px; color: #ffffff; font-size: 13px; font-weight: 800; cursor: pointer; box-shadow: 0 4px 12px rgba(220, 38, 38, 0.35); transition: all 0.2s ease-in-out;"
                            onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 6px 16px rgba(220, 38, 38, 0.45)';"
                            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(220, 38, 38, 0.35)';"
                        >
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                                <polyline points="16 17 21 12 16 7"/>
                                <line x1="21" y1="12" x2="9" y2="12"/>
                            </svg>
                            <span>Keluar dari Akun</span>
                        </button>
                    </form>
                </div>

            </aside>

            <!-- Area Konten Utama -->
            <main style="flex: 1; display: flex; flex-direction: column; overflow-y: auto;">
                
                <!-- Header Atas dengan Pop-Up Shadow -->
                <header style="background-color: #ffffff; border-bottom: 1px solid #e2e8f0; padding: 24px 36px; display: flex; align-items: center; justify-content: space-between; box-shadow: 0 4px 20px -5px rgba(15, 23, 42, 0.05); position: relative; z-index: 10;">
                    <div style="display: flex; align-items: center; gap: 16px;">
                        <img src="{{ asset('images/logo-icon.png') }}" alt="Avatar" style="width: 52px; height: 52px; border-radius: 50%; background-color: #f0fdf4; padding: 6px; border: 1px solid #bbf7d0; object-fit: contain; box-shadow: 0 4px 10px rgba(5, 150, 105, 0.15);">
                        <div>
                            <h2 style="font-size: 20px; font-weight: 800; color: #0f172a; margin: 0 0 2px 0;">
                                Selamat Datang Kembali, {{ Auth::user()->name ?? 'Nurul Nabila Shofuroh' }}!
                            </h2>
                            <p style="font-size: 13px; color: #64748b; margin: 0; font-weight: 500;">
                                Pusat kendali aksi sosial dan status partisipasi relawanmu.
                            </p>
                        </div>
                    </div>

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

                <!-- Isi Konten Dashboard -->
                <div style="padding: 32px; display: grid; grid-template-columns: 2fr 1fr; gap: 28px;">
                    
                    <!-- Kolom Kiri -->
                    <div style="display: flex; flex-direction: column; gap: 28px;">
                        
                        <!-- Seksi: Pemberitahuan (Notifications) dengan Pop-Up & Pulsing Glow -->
                        <div class="pulse-card" style="background: linear-gradient(135deg, #fff7ed 0%, #ffedd5 100%); border: 1.5px solid #fdba74; border-radius: 20px; padding: 24px;">
                            
                            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px;">
                                <div style="display: flex; align-items: center; gap: 10px;">
                                    <span style="padding: 6px 12px; background-color: #ea580c; color: #ffffff; font-size: 11px; font-weight: 800; border-radius: 9999px; text-transform: uppercase; letter-spacing: 0.05em; display: flex; align-items: center; gap: 6px;">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
                                        PENGUMUMAN PENTING
                                    </span>
                                    <span style="font-size: 12px; font-weight: 700; color: #c2410c;">Batas Waktu Pendaftaran!</span>
                                </div>

                                <!-- Live Countdown Timer Interaktif -->
                                <div style="display: flex; align-items: center; gap: 6px;">
                                    <div class="timer-box">
                                        <span id="hours">12</span>
                                        <span class="timer-label">Jam</span>
                                    </div>
                                    <span style="font-weight: 800; color: #ea580c;">:</span>
                                    <div class="timer-box">
                                        <span id="minutes">45</span>
                                        <span class="timer-label">Menit</span>
                                    </div>
                                    <span style="font-weight: 800; color: #ea580c;">:</span>
                                    <div class="timer-box">
                                        <span id="seconds">30</span>
                                        <span class="timer-label">Detik</span>
                                    </div>
                                </div>
                            </div>

                            <div style="display: flex; align-items: flex-start; gap: 16px; background-color: #ffffff; padding: 18px; border-radius: 16px; border: 1px solid #fed7aa; box-shadow: 0 6px 16px rgba(234, 88, 12, 0.12);">
                                <div style="width: 44px; height: 44px; background-color: #ffedd5; border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #ea580c; flex-shrink: 0;">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                                </div>
                                <div style="flex: 1;">
                                    <h4 style="font-size: 15px; font-weight: 800; color: #9a3412; margin: 0 0 4px 0;">
                                        Pendaftaran Ekspedisi Papua Batch 14 Segera Ditutup!
                                    </h4>
                                    <p style="font-size: 13px; color: #c2410c; margin: 0 0 12px 0; font-weight: 500; line-height: 1.5;">
                                        Kesempatan ini terbatas! Pilih jalur partisipasi Anda dan kirimkan formulir sekarang sebelum kuota penuh.
                                    </p>
                                    <a href="{{ url('/jalur-daftar') }}" style="display: inline-flex; align-items: center; gap: 8px; padding: 10px 18px; background-color: #ea580c; color: #ffffff; font-size: 13px; font-weight: 800; border-radius: 10px; text-decoration: none; box-shadow: 0 4px 12px rgba(234, 88, 12, 0.3); transition: all 0.2s;" onmouseover="this.style.backgroundColor='#c2410c'; this.style.transform='translateY(-2px)';" onmouseout="this.style.backgroundColor='#ea580c'; this.style.transform='translateY(0)';">
                                        <span>Daftar Sebelum Kehabisan!</span>
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                                    </a>
                                </div>
                            </div>

                        </div>

                        <!-- Seksi: Upcoming Events dengan Pop-Up Shadow -->
                        <div class="popup-card" style="padding: 24px;">
                            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px; border-bottom: 1px solid #f1f5f9; padding-bottom: 12px;">
                                <h3 style="font-size: 17px; font-weight: 800; color: #0f172a; margin: 0; display: flex; align-items: center; gap: 8px;">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#046a38" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                                    Kegiatan Mendatang (Upcoming Events)
                                </h3>
                                <a href="{{ route('activities.index') }}" style="font-size: 12px; font-weight: 700; color: #046a38; text-decoration: none;">Lihat Semua →</a>
                            </div>

                            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px;">
                                <div class="item-card">
                                    <span style="font-size: 11px; font-weight: 800; color: #046a38; background-color: #d1fae5; padding: 4px 10px; border-radius: 6px; display: inline-block;">Pelestarian</span>
                                    <h4 style="font-size: 14px; font-weight: 700; color: #0f172a; margin: 10px 0 6px 0;">Konservasi Mangrove</h4>
                                    <p style="font-size: 12px; color: #64748b; margin: 0; font-weight: 500; line-height: 1.5;">
                                        📅 15 Nov 2026<br>
                                        ⏰ 08:00 - 14:00 WIB
                                    </p>
                                </div>

                                <div class="item-card">
                                    <span style="font-size: 11px; font-weight: 800; color: #2563eb; background-color: #dbeafe; padding: 4px 10px; border-radius: 6px; display: inline-block;">Pendidikan</span>
                                    <h4 style="font-size: 14px; font-weight: 700; color: #0f172a; margin: 10px 0 6px 0;">Kelas Inspirasi 3T</h4>
                                    <p style="font-size: 12px; color: #64748b; margin: 0; font-weight: 500; line-height: 1.5;">
                                        📅 22 Nov 2026<br>
                                        ⏰ 09:00 - 15:00 WIB
                                    </p>
                                </div>

                                <div class="item-card">
                                    <span style="font-size: 11px; font-weight: 800; color: #ea580c; background-color: #ffedd5; padding: 4px 10px; border-radius: 6px; display: inline-block;">Kesehatan</span>
                                    <h4 style="font-size: 14px; font-weight: 700; color: #0f172a; margin: 10px 0 6px 0;">Bakti Sehat Desa</h4>
                                    <p style="font-size: 12px; color: #64748b; margin: 0; font-weight: 500; line-height: 1.5;">
                                        📅 05 Des 2026<br>
                                        ⏰ 07:30 - 12:00 WIB
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Kolom Kanan: Past Events dengan Pop-Up Shadow -->
                    <div style="display: flex; flex-direction: column; gap: 28px;">
                        <div class="popup-card" style="padding: 24px;">
                            <div style="margin-bottom: 20px; border-bottom: 1px solid #f1f5f9; padding-bottom: 12px;">
                                <h3 style="font-size: 17px; font-weight: 800; color: #0f172a; margin: 0; display: flex; align-items: center; gap: 8px;">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#64748b" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                                    Riwayat (Past Events)
                                </h3>
                            </div>

                            <div style="display: flex; flex-direction: column; gap: 14px;">
                                <div class="item-card">
                                    <h4 style="font-size: 13px; font-weight: 700; color: #0f172a; margin: 0 0 4px 0;">Ekspedisi Sapa Papua #7</h4>
                                    <p style="font-size: 11px; color: #64748b; margin: 0; font-weight: 500; line-height: 1.4;">
                                        📅 10 Oktober 2026<br>
                                        📍 Raja Ampat, Papua Barat
                                    </p>
                                </div>

                                <div class="item-card">
                                    <h4 style="font-size: 13px; font-weight: 700; color: #0f172a; margin: 0 0 4px 0;">Aksi Tanam 1.000 Pohon</h4>
                                    <p style="font-size: 11px; color: #64748b; margin: 0; font-weight: 500; line-height: 1.4;">
                                        📅 24 Agustus 2026<br>
                                        📍 Merbabu, Jawa Tengah
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </main>

        </div>

        <!-- Script Live Countdown Timer Interaktif -->
        <script>
            let totalSeconds = (12 * 3600) + (45 * 60) + 30;

            function updateTimer() {
                if (totalSeconds <= 0) {
                    totalSeconds = (12 * 3600) + (45 * 60) + 30; // Reset loop untuk demo
                }
                totalSeconds--;

                const hours = Math.floor(totalSeconds / 3600);
                const minutes = Math.floor((totalSeconds % 3600) / 60);
                const seconds = totalSeconds % 60;

                document.getElementById('hours').innerText = hours < 10 ? '0' + hours : hours;
                document.getElementById('minutes').innerText = minutes < 10 ? '0' + minutes : minutes;
                document.getElementById('seconds').innerText = seconds < 10 ? '0' + seconds : seconds;
            }

            setInterval(updateTimer, 1000);
        </script>
    </body>
</html> 