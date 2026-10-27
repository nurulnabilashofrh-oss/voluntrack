<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Kegiatan - VolunTrack</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=plus-jakarta-sans:400,500,600,700,800&display=swap" rel="stylesheet" />
    
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f8fafc;
            color: #1e293b;
            display: flex;
            height: 100vh;
            overflow: hidden;
        }
        /* Sidebar Utama */
        aside {
            width: 260px;
            background-color: #046a38;
            color: #ffffff;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 24px 18px;
            box-shadow: 4px 0 15px rgba(0,0,0,0.05);
            flex-shrink: 0;
            height: 100vh;
        }
        .nav-link {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 16px;
            border-radius: 12px;
            font-weight: 600;
            color: #d1fae5;
            text-decoration: none;
            font-size: 14px;
            transition: background 0.2s;
        }
        .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.08);
        }
        .nav-link.active {
            background-color: rgba(255, 255, 255, 0.18);
            color: #ffffff;
            font-weight: 700;
        }
        /* Main Container */
        .main-container {
            flex: 1;
            display: flex;
            flex-direction: column;
            height: 100vh;
            overflow: hidden;
        }
        header {
            height: 70px;
            background: #ffffff;
            border-bottom: 1px solid #e2e8f0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 32px;
            flex-shrink: 0;
        }
        .content-body {
            padding: 24px 32px;
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 20px;
            overflow-y: auto;
            max-width: 1100px;
            width: 100%;
            margin: 0 auto;
        }
        
        /* EFEK SHADOW ORANGE GLOW (Sama Persis Seperti Dashboard Utama) */
        .glow-card-orange {
            background: #ffffff;
            border-radius: 24px;
            border: 2px solid #ffedd5; /* Border oranye sangat lembut */
            padding: 26px 30px;
            box-shadow: 0 12px 35px rgba(249, 115, 22, 0.12), 0 4px 12px rgba(249, 115, 22, 0.06);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .glow-card-orange:hover {
            transform: translateY(-2px);
            box-shadow: 0 16px 40px rgba(249, 115, 22, 0.16), 0 6px 16px rgba(249, 115, 22, 0.08);
        }

        /* Stat Boxes Grid (Shadow Mulus) */
        .stat-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        .stat-box {
            background: #ffffff;
            border-radius: 18px;
            border: 1px solid #e2e8f0;
            padding: 20px 24px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.04);
            transition: transform 0.2s;
        }
        .stat-box:hover {
            transform: translateY(-2px);
        }

        /* Activity List Item */
        .activity-item {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            padding: 18px 22px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 4px 15px rgba(0,0,0,0.02);
            transition: all 0.2s ease;
        }
        .activity-item:hover {
            border-color: #046a38;
            box-shadow: 0 6px 20px rgba(4, 106, 56, 0.08);
        }
    </style>
</head>
<body>

    <!-- SIDEBAR KIRI -->
    <aside>
        <div style="display: flex; flex-direction: column; gap: 28px;">
            <!-- Logo -->
            <a href="{{ url('/') }}" style="display: flex; align-items: center; gap: 12px; text-decoration: none; padding-left: 6px;">
                <img src="{{ asset('images/logo-icon.png') }}" alt="VolunTrack Icon" style="height: 40px; width: auto; object-fit: contain;" onerror="this.style.display='none'">
                <span style="font-size: 22px; font-weight: 800; color: #ffffff; letter-spacing: -0.02em;">
                    Volun<span style="color: #34d399;">Track</span>
                </span>
            </a>

            <!-- Menu Navigasi -->
            <nav style="display: flex; flex-direction: column; gap: 6px;">
    <!-- Menu Dashboard -->
    <a href="{{ url('/dashboard') }}" class="nav-link">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="9"/><rect x="14" y="3" width="7" height="5"/><rect x="14" y="12" width="7" height="9"/><rect x="3" y="16" width="7" height="5"/></svg>
        <span>Dashboard</span>
    </a>

    <!-- Menu Profile Saya -->
    <a href="{{ route('profile.edit') }}" class="nav-link">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
        <span>Profile Saya</span>
    </a>

    <!-- Menu Status Pendaftaran (Ganti dari '#' ke URL yang benar) -->
    <a href="{{ url('/jalur-daftar') }}" class="nav-link">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
        <span>Status Pendaftaran</span>
    </a>

    <!-- Menu Riwayat Kegiatan (Ganti dari '#' ke URL yang benar) -->
    <a href="{{ url('/riwayat-kegiatan') }}" class="nav-link">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
        <span>Riwayat Kegiatan</span>
    </a>
</nav>
        </div>

        <!-- Profil & Logout di Bawah -->
        <div style="border-top: 1px solid rgba(255, 255, 255, 0.15); padding-top: 16px; display: flex; flex-direction: column; gap: 14px;">
            <div>
                <h4 style="font-size: 14px; font-weight: 700; color: #ffffff; margin: 0; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                    {{ Auth::user()->name ?? 'Nurul Nabila Shofuroh' }}
                </h4>
                <span style="font-size: 11px; font-weight: 700; color: #a7f3d0; text-transform: uppercase; letter-spacing: 0.05em;">
                    ROLE: VOLUNTEER
                </span>
            </div>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" style="width: 100%; display: flex; align-items: center; justify-content: center; gap: 10px; padding: 10px 16px; background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%); border: none; border-radius: 10px; color: #ffffff; font-size: 13px; font-weight: 800; cursor: pointer; box-shadow: 0 4px 12px rgba(220, 38, 38, 0.35);">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>
                    <span>Keluar dari Akun</span>
                </button>
            </form>
        </div>
    </aside>

    <!-- KONTEN UTAMA -->
    <div class="main-container">
        <!-- Header Atas -->
        <header>
            <div style="font-weight: 700; font-size: 16px; color: #0f172a;">Sistem Manajemen Relawan</div>
            <div style="font-weight: 600; font-size: 14px; color: #475569;">Halo, {{ Auth::user()->name ?? 'Nurul Nabila Shofuroh' }}!</div>
        </header>

        <!-- Body Content -->
        <div class="content-body">
            
            <!-- Judul & Badge Header -->
            <div style="display: flex; align-items: center; justify-content: space-between;">
                <div>
                    <h1 style="font-size: 22px; font-weight: 800; color: #0f172a; margin: 0 0 4px 0;">Riwayat Kegiatan 📚</h1>
                    <p style="font-size: 13px; color: #64748b; margin: 0;">Lihat perjalanan kontribusimu dan kegiatan yang kamu ikuti bersama VolunTrack.</p>
                </div>
                <span style="background: #ecfdf5; color: #046a38; border: 1px solid #a7f3d0; font-size: 12px; font-weight: 700; padding: 6px 16px; border-radius: 20px;">
                    🌿 PERJALANAN RELAWAN
                </span>
            </div>

            <!-- Stat Boxes Grid -->
            <div class="stat-grid">
                <div class="stat-box">
                    <div style="font-size: 12px; font-weight: 700; color: #64748b; text-transform: uppercase; margin-bottom: 6px;">TOTAL KEGIATAN</div>
                    <div style="font-size: 28px; font-weight: 800; color: #046a38;">3</div>
                </div>
                <div class="stat-box">
                    <div style="font-size: 12px; font-weight: 700; color: #64748b; text-transform: uppercase; margin-bottom: 6px;">KEGIATAN SELESAI</div>
                    <div style="font-size: 28px; font-weight: 800; color: #059669;">1</div>
                </div>
                <div class="stat-box">
                    <div style="font-size: 12px; font-weight: 700; color: #64748b; text-transform: uppercase; margin-bottom: 6px;">KEGIATAN MENDATANG</div>
                    <div style="font-size: 28px; font-weight: 800; color: #ea580c;">1</div>
                </div>
            </div>

            <!-- Kartu Utama Daftar Riwayat dengan Efek Orange Glow -->
            <div class="glow-card-orange" style="display: flex; flex-direction: column; gap: 16px;">
                <div style="display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid #f1f5f9; padding-bottom: 14px;">
                    <h3 style="font-size: 16px; font-weight: 800; color: #0f172a; margin: 0; display: flex; align-items: center; gap: 8px;">
                        <span>📁</span> Daftar Riwayat
                    </h3>
                    <select style="padding: 6px 14px; border: 1px solid #cbd5e1; border-radius: 10px; font-size: 13px; font-weight: 600; color: #475569; background: #f8fafc; outline: none;">
                        <option>Selesai</option>
                        <option>Semua Kegiatan</option>
                        <option>Berlangsung</option>
                    </select>
                </div>

                <!-- List Item 1 -->
                <div class="activity-item">
                    <div style="display: flex; align-items: center; gap: 14px;">
                        <div style="width: 44px; height: 44px; background: #ecfdf5; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 20px;">🌳</div>
                        <div>
                            <h4 style="font-size: 14px; font-weight: 800; color: #0f172a; margin: 0 0 2px 0;">Konservasi Mangrove Nusantara</h4>
                            <p style="font-size: 12px; color: #64748b; margin: 0;">📅 15 November 2026 &bull; 📍 Pesisir Pantai Cilacap, Jawa Tengah</p>
                        </div>
                    </div>
                    <span style="background: #dcfce7; color: #15803d; font-size: 11px; font-weight: 800; padding: 6px 14px; border-radius: 8px;">✓ Selesai</span>
                </div>

                <!-- List Item 2 -->
                <div class="activity-item">
                    <div style="display: flex; align-items: center; gap: 14px;">
                        <div style="width: 44px; height: 44px; background: #eff6ff; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 20px;">📚</div>
                        <div>
                            <h4 style="font-size: 14px; font-weight: 800; color: #0f172a; margin: 0 0 2px 0;">Kelas Inspirasi Nusantara</h4>
                            <p style="font-size: 12px; color: #64748b; margin: 0;">📅 22 November 2026 &bull; 📍 Kabupaten Alor, Nusa Tenggara Timur</p>
                        </div>
                    </div>
                    <span style="background: #e0f2fe; color: #0369a1; font-size: 11px; font-weight: 800; padding: 6px 14px; border-radius: 8px;">● Berlangsung</span>
                </div>

            </div>

        </div>
    </div>

</body>
</html>