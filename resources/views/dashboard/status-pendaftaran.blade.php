
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Pendaftaran - VolunTrack</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: #f4f8f7;
            color: #102b24;
        }

        .dashboard {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 260px;
            background: #086b40;
            color: white;
            padding: 25px 18px;
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 5px 12px 30px;
            font-size: 24px;
            font-weight: 800;
            border-bottom: 1px solid rgba(255,255,255,.17);
        }

        .brand span {
            color: #65e6ae;
        }

        .menu {
            display: flex;
            flex-direction: column;
            gap: 9px;
            margin-top: 22px;
        }

        .menu a {
            text-decoration: none;
            color: #e4fff0;
            padding: 14px 15px;
            border-radius: 12px;
            font-size: 13px;
            font-weight: 600;
            transition: .2s;
        }

        .menu a:hover,
        .menu a.active {
            background: rgba(255,255,255,.17);
            color: white;
        }

        .account {
            margin-top: auto;
            padding: 24px 10px 0;
            border-top: 1px solid rgba(255,255,255,.17);
            font-size: 12px;
            line-height: 1.8;
            overflow-wrap: anywhere;
        }

        .account .role {
            color: #8ef0bd;
        }

        .logout {
            display: inline-block;
            margin-top: 14px;
            color: #fff1d6;
            text-decoration: none;
            font-weight: 700;
        }

        .main {
            flex: 1;
            min-width: 0;
        }

        .topbar {
            background: white;
            padding: 23px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
            border-bottom: 1px solid #e3ece7;
        }

        .topbar h2 {
            font-size: 18px;
        }

        .topbar p {
            font-size: 12px;
            color: #6b7e77;
            margin-top: 5px;
        }

        .welcome {
            font-size: 12px;
            color: #526d62;
            text-align: right;
        }

        .content {
            padding: 30px;
            max-width: 1250px;
            margin: auto;
        }

        .page-heading {
            margin-bottom: 25px;
        }

        .eyebrow {
            display: inline-block;
            background: #d9fbea;
            color: #087b4b;
            padding: 8px 13px;
            border-radius: 30px;
            font-size: 10px;
            font-weight: 800;
            letter-spacing: .5px;
            margin-bottom: 14px;
        }

        .page-heading h1 {
            font-size: clamp(24px, 3vw, 32px);
            margin-bottom: 9px;
            letter-spacing: -.8px;
        }

        .page-heading p {
            font-size: 13px;
            color: #708078;
            line-height: 1.8;
        }

        .status-banner {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            background: linear-gradient(120deg, #e2f9ed, #f5fff9);
            border: 1px solid #c8efda;
            border-radius: 20px;
            padding: 25px;
            margin-bottom: 24px;
        }

        .status-label {
            color: #087b4b;
            font-size: 11px;
            font-weight: 800;
            margin-bottom: 10px;
        }

        .status-banner h2 {
            font-size: 21px;
            margin-bottom: 8px;
        }

        .status-banner p {
            color: #60766a;
            font-size: 12px;
            line-height: 1.8;
        }

        .status-pill {
            background: white;
            color: #087b4b;
            border: 1px solid #bce9cf;
            border-radius: 30px;
            padding: 11px 15px;
            font-size: 11px;
            font-weight: 800;
            white-space: nowrap;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 17px;
            margin-bottom: 24px;
        }

        .card {
            background: white;
            border: 1px solid #e2ece6;
            border-radius: 17px;
            padding: 22px;
            box-shadow: 0 8px 24px rgba(20, 70, 47, .045);
        }

        .card-label {
            color: #7a8b83;
            font-size: 11px;
            margin-bottom: 13px;
        }

        .card-value {
            font-size: 18px;
            font-weight: 800;
            overflow-wrap: anywhere;
        }

        .card-note {
            color: #07814c;
            font-size: 11px;
            margin-top: 9px;
        }

        .section {
            background: white;
            border: 1px solid #e2ece6;
            border-radius: 19px;
            padding: 25px;
            margin-bottom: 22px;
            box-shadow: 0 8px 24px rgba(20, 70, 47, .04);
        }

        .section h2 {
            font-size: 17px;
            margin-bottom: 7px;
        }

        .section-subtitle {
            color: #7b8c84;
            font-size: 12px;
            line-height: 1.8;
            margin-bottom: 25px;
        }

        .timeline {
            display: flex;
            flex-direction: column;
        }

        .step {
            display: flex;
            gap: 15px;
            min-height: 82px;
        }

        .step-icon {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: #d9fbea;
            color: #07814c;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            flex-shrink: 0;
            border: 1px solid #b7e8cc;
        }

        .step.pending .step-icon {
            background: #f3f6f4;
            color: #9aa9a1;
            border-color: #e1e8e3;
        }

        .step-body {
            padding-bottom: 20px;
            flex: 1;
            border-bottom: 1px solid #edf2ef;
        }

        .step:last-child .step-body {
            border-bottom: none;
        }

        .step-body h3 {
            font-size: 13px;
            margin: 2px 0 7px;
        }

        .step-body p {
            font-size: 11px;
            color: #7a8b83;
            line-height: 1.7;
        }

        .step-tag {
            display: inline-block;
            margin-top: 8px;
            color: #087b4b;
            background: #e4f9ed;
            padding: 5px 9px;
            border-radius: 20px;
            font-size: 10px;
            font-weight: 700;
        }

        .help-box {
            background: #fffaf0;
            border: 1px solid #f3e4bd;
            padding: 20px;
            border-radius: 16px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
        }

        .help-box h3 {
            font-size: 13px;
            margin-bottom: 7px;
        }

        .help-box p {
            font-size: 11px;
            color: #7f7560;
            line-height: 1.7;
        }

        .help-link {
            background: #ea580c;
            color: white;
            text-decoration: none;
            padding: 12px 15px;
            border-radius: 10px;
            font-size: 11px;
            font-weight: 800;
            white-space: nowrap;
        }

        @media (max-width: 850px) {
            .sidebar {
                width: 215px;
            }

            .cards {
                grid-template-columns: 1fr;
            }

            .content {
                padding: 22px;
            }
        }

        @media (max-width: 600px) {
            .dashboard {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                padding: 15px;
            }

            .brand {
                padding-bottom: 15px;
            }

            .menu {
                display: grid;
                grid-template-columns: repeat(2, minmax(0, 1fr));
                margin-top: 14px;
            }

            .menu a {
                padding: 12px 9px;
                font-size: 11px;
            }

            .account {
                margin-top: 18px;
            }

            .topbar {
                padding: 18px;
            }

            .welcome {
                display: none;
            }

            .content {
                padding: 18px 13px;
            }

            .status-banner,
            .help-box {
                align-items: flex-start;
                flex-direction: column;
            }

            .section {
                padding: 19px;
            }
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

    <a href="{{ url('/status-pendaftaran') }}" style="display: flex; align-items: center; gap: 12px; padding: 12px 16px; border-radius: 12px; font-weight: 600; color: #d1fae5; text-decoration: none; font-size: 14px; transition: background 0.2s;" onmouseover="this.style.backgroundColor='rgba(255,255,255,0.08)'" onmouseout="this.style.backgroundColor='transparent'">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
        <span>Status Pendaftaran</span>
    </a>

    <a href="{{ route('riwayat-kegiatan') }}" style="display: flex; align-items: center; gap: 12px; padding: 12px 16px; border-radius: 12px; font-weight: 600; color: #d1fae5; text-decoration: none; font-size: 14px; transition: background 0.2s;" onmouseover="this.style.backgroundColor='rgba(255,255,255,0.08)'" onmouseout="this.style.backgroundColor='transparent'">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
        <span>Riwayat Kegiatan</span>
    </a>
</nav>
                </div>

        <div class="account">
            <strong>{{ Auth::user()->name }}</strong><br>
            <span class="role">ROLE: {{ strtoupper(Auth::user()->role ?? 'VOLUNTEER') }}</span>

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

    <main class="main">
        <header class="topbar">
            <div>
                <h2>Status Pendaftaran Relawan</h2>
                <p>Pantau proses pendaftaranmu di VolunTrack.</p>
            </div>

            <div class="welcome">
                Halo, <strong>{{ Auth::user()->name }}</strong>!
            </div>
        </header>

        <div class="content">

            <div class="page-heading">
                <span class="eyebrow">✦ AREA RELAWAN</span>
                <h1>Status Pendaftaran <span style="color:#07965d;">Saya</span></h1>
                <p>
                    Semua informasi pendaftaranmu dalam satu halaman.
                    Pantau setiap tahap dan persiapkan langkah berikutnya.
                </p>
            </div>

            <section class="status-banner">
                <div>
                    <div class="status-label">● INFORMASI PENDAFTARAN</div>
                    <h2>Pendaftaran Relawan</h2>
                    <p>
                        Selamat datang di proses pendaftaran VolunTrack.
                        Informasi status akan ditampilkan di halaman ini.
                    </p>
                </div>

                <div class="status-pill">Belum ada status</div>
            </section>

            <div class="cards">
                <div class="card">
                    <div class="card-label">Jalur Pendaftaran</div>
                    <div class="card-value">Fully Funded</div>
                    <div class="card-note">Pilih jalur yang sesuai</div>
                </div>

                <div class="card">
                    <div class="card-label">Tanggal Pendaftaran</div>
                    <div class="card-value">22 Oktober 2026</div>
                    <div class="card-note"></div>
                </div>

                <div class="card">
                    <div class="card-label">Status Seleksi</div>
                    <div class="card-value">Menunggu</div>
                    <div class="card-note">Informasi belum tersedia</div>
                </div>
            </div>
            <section class="help-box">
                <div>
                    <h3>Belum memilih jalur relawan?</h3>
                    <p>
                        Lihat pilihan program dan jalur partisipasi yang tersedia.
                    </p>
                </div>

                <a href="{{ route('dashboard') }}" class="help-link">
    ← Kembali ke Dashboard
                       </a>
            </section>

        </div>
    </main>
</div>
</body>
</html>
