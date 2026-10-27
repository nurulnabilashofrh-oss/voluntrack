<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Saya - VolunTrack</title>
    
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
        /* Main Content Area */
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
        }
        .content-body {
            padding: 12px 32px;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            overflow-y: auto;
        }
        .profile-card {
            background: #ffffff;
            border-radius: 20px;
            border: 1px solid #e2e8f0;
            padding: 32px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.03);
            display: flex;
            flex-direction: column;
            align-items: center;
            max-width: 920px;
            width: 100%;
        }
        .avatar-circle {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #046a38 0%, #34d399 100%);
            color: white;
            font-size: 32px;
            font-weight: 800;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 20px rgba(4, 106, 56, 0.25);
            margin-bottom: 14px;
        }
        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
            width: 100%;
            margin-top: 24px;
            text-align: left;
        }
        .info-box {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            padding: 16px 20px;
            border-radius: 14px;
        }
        .info-label {
            font-size: 11px;
            font-weight: 700;
            color: #64748b;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 4px;
        }
        .info-value {
            font-size: 14px;
            font-weight: 700;
            color: #0f172a;
        }
        .btn-edit {
            margin-top: 28px;
            background: linear-gradient(135deg, #ea580c 0%, #c2410c 100%);
            color: white;
            border: none;
            padding: 12px 32px;
            border-radius: 12px;
            font-weight: 700;
            font-size: 14px;
            cursor: pointer;
            box-shadow: 0 4px 14px rgba(234, 88, 12, 0.35);
            transition: all 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .btn-edit:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 18px rgba(234, 88, 12, 0.45);
        }
        /* Style untuk Form Edit */
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
            width: 100%;
            margin-top: 20px;
            text-align: left;
        }
        .form-group {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }
        .form-input {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #cbd5e1;
            border-radius: 12px;
            font-size: 14px;
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #0f172a;
            background: #f8fafc;
            outline: none;
            transition: all 0.2s;
        }
        .form-input:focus {
            border-color: #046a38;
            background: #ffffff;
            box-shadow: 0 0 0 3px rgba(4, 106, 56, 0.15);
        }
        .btn-container {
            display: flex;
            gap: 12px;
            margin-top: 24px;
            width: 100%;
            justify-content: flex-end;
        }
        .btn-save {
            background: linear-gradient(135deg, #ea580c 0%, #c2410c 100%);
            color: white;
            border: none;
            padding: 12px 28px;
            border-radius: 12px;
            font-weight: 700;
            font-size: 14px;
            cursor: pointer;
            box-shadow: 0 4px 14px rgba(234, 88, 12, 0.35);
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .btn-cancel {
            background: #f1f5f9;
            color: #475569;
            border: none;
            padding: 12px 24px;
            border-radius: 12px;
            font-weight: 700;
            font-size: 14px;
            cursor: pointer;
            transition: background 0.2s;
        }
        .btn-cancel:hover {
            background: #e2e8f0;
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
                <a href="{{ url('/dashboard') }}" class="nav-link">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="9"/><rect x="14" y="3" width="7" height="5"/><rect x="14" y="12" width="7" height="9"/><rect x="3" y="16" width="7" height="5"/></svg>
                    <span>Dashboard</span>
                </a>

                <a href="{{ route('profile.edit') }}" class="nav-link active">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                    <span>Profile Saya</span>
                </a>

                <a href="{{ url('/status-pendaftaran') }}" class="nav-link">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                    <span>Status Pendaftaran</span>
                </a>

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

        <!-- Body Profile & Edit Form (Interaktif dalam 1 Halaman) -->
        <div class="content-body">
            <div class="profile-card">
                
                <!-- TAMPILAN 1: VIEW PROFIL BIASA -->
                <div id="view-profile-section" style="display: flex; flex-direction: column; align-items: center; width: 100%;">
                    <div class="avatar-circle">
                        {{ strtoupper(substr(Auth::user()->name ?? 'N', 0, 1)) }}
                    </div>
                    <h2 style="font-size: 18px; font-weight: 800; color: #0f172a; margin: 0 0 4px 0;">
                        {{ Auth::user()->name ?? 'Nurul Nabila Shofuroh' }}
                    </h2>
                    <span style="font-size: 13px; color: #64748b; margin-bottom: 12px;">{{ Auth::user()->email ?? 'nnutrtl@gmail.com' }}</span>
                    <span style="background: #ecfdf5; color: #059669; font-size: 11px; font-weight: 800; padding: 4px 12px; border-radius: 20px; text-transform: uppercase;">
                        🌱 Volunteer Active
                    </span>

                    <div class="info-grid">
                        <div class="info-box">
                            <div class="info-label">Nama Lengkap</div>
                            <div class="info-value">{{ Auth::user()->name ?? 'Nurul Nabila Shofuroh' }}</div>
                        </div>
                        <div class="info-box">
                            <div class="info-label">Alamat Email</div>
                            <div class="info-value">{{ Auth::user()->email ?? 'nnutrtl@gmail.com' }}</div>
                        </div>
                        <div class="info-box">
                            <div class="info-label">Role Akun</div>
                            <div class="info-value">Volunteer / Relawan</div>
                        </div>
                        <div class="info-box">
                            <div class="info-label">Bergabung Sejak</div>
                            <div class="info-value">Oktober 2026</div>
                        </div>
                    </div>

                    <button type="button" class="btn-edit" onclick="showEditForm()">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                        <span>Edit Profil Saya</span>
                    </button>
                </div>

                <!-- TAMPILAN 2: FORM EDIT PROFIL (AWALNYA TERSEMBUNYI) -->
                <div id="edit-form-section" style="display: none; width: 100%;">
                    <div style="display: flex; align-items: center; gap: 16px; width: 100%; margin-bottom: 20px; border-bottom: 1px solid #e2e8f0; padding-bottom: 16px; text-align: left;">
                        <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #046a38 0%, #34d399 100%); color: white; font-size: 20px; font-weight: 800; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            {{ strtoupper(substr(Auth::user()->name ?? 'N', 0, 1)) }}
                        </div>
                        <div>
                            <h2 style="font-size: 18px; font-weight: 800; color: #0f172a; margin: 0 0 2px 0;">Edit Informasi Profil</h2>
                            <p style="font-size: 13px; color: #64748b; margin: 0;">Perbarui data diri dan informasi akun relawanmu di sini.</p>
                        </div>
                    </div>

                    <form action="{{ route('profile.update') }}" method="POST" style="width: 100%;">
                        @csrf
                        @method('PATCH')

                        <div class="form-grid">
                            <div class="form-group">
                                <label style="font-size: 12px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 6px;">Nama Lengkap</label>
                                <input type="text" name="name" class="form-input" value="{{ Auth::user()->name ?? 'Nurul Nabila Shofuroh' }}" required>
                            </div>
                            <div class="form-group">
                                <label style="font-size: 12px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 6px;">Alamat Email</label>
                                <input type="email" name="email" class="form-input" value="{{ Auth::user()->email ?? 'nnutrtl@gmail.com' }}" required>
                            </div>
                        </div>

                        <div class="btn-container">
                            <button type="button" class="btn-cancel" onclick="hideEditForm()">Batal</button>
                            <button type="submit" class="btn-save">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"/><polyline points="17 21 17 13 7 13 7 21"/><polyline points="7 3 7 8 15 8"/></svg>
                                <span>Simpan Perubahan</span>
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- Script JavaScript untuk Toggle Tampilan -->
    <script>
        function showEditForm() {
            document.getElementById('view-profile-section').style.display = 'none';
            document.getElementById('edit-form-section').style.display = 'block';
        }

        function hideEditForm() {
            document.getElementById('edit-form-section').style.display = 'none';
            document.getElementById('view-profile-section').style.display = 'flex';
        }
    </script>

</body>
</html>