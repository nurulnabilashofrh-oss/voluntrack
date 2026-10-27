<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jalur Pendaftaran Relawan - VolunTrack</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=plus-jakarta-sans:400,500,600,700,800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        :root {
            --green: #059669;
            --green-dark: #047857;
            --green-light: #ecfdf5;
            --orange: #f97316;
            --navy: #172554;
            --text: #334155;
            --muted: #64748b;
            --border: #e2e8f0;
            --white: #ffffff;
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: #f8fafc;
            color: var(--text);
            margin: 0;
        }

        a {
            -webkit-tap-highlight-color: transparent;
            text-decoration: none;
        }

        /* NAVBAR */
        .navbar {
            position: sticky;
            top: 0;
            z-index: 50;
            background: rgba(255, 255, 255, 0.96);
            border-bottom: 1px solid var(--border);
            box-shadow: 0 3px 15px rgba(15, 23, 42, 0.04);
            backdrop-filter: blur(12px);
        }

        .nav-container {
            max-width: 1280px;
            min-height: 78px;
            margin: 0 auto;
            padding: 12px 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 11px;
            flex-shrink: 0;
        }

        .brand img {
            width: 44px;
            height: 44px;
            object-fit: contain;
        }

        .brand-name {
            font-size: 23px;
            font-weight: 800;
            letter-spacing: -1px;
            color: var(--navy);
            white-space: nowrap;
        }

        .brand-name span {
            color: var(--green);
        }

        /* HERO & DEKORASI */
        .hero {
            position: relative;
            isolation: isolate;
            overflow: hidden;
            padding: 70px 24px 80px;
            text-align: center;
            background: 
                radial-gradient(circle at 90% 15%, rgba(16, 185, 129, 0.12), transparent 38%),
                linear-gradient(180deg, #ffffff 0%, #f0fdf4 100%);
        }

        .hero::before {
            content: "";
            position: absolute;
            width: 280px;
            height: 280px;
            top: -20px;
            right: 5%;
            border: 2px solid rgba(16, 185, 129, 0.15);
            border-radius: 50%;
            z-index: -1;
            pointer-events: none;
        }

        .hero::after {
            content: "✦";
            position: absolute;
            top: 25%;
            left: 48%;
            color: #fb923c;
            font-size: 28px;
            opacity: 0.85;
            pointer-events: none;
        }

        .hero-inner {
            max-width: 850px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 9px 16px;
            margin-bottom: 22px;
            color: var(--green-dark);
            background: #dcfce7;
            border: 1px solid #bbf7d0;
            border-radius: 999px;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 1px;
        }

        .eyebrow-dot {
            width: 7px;
            height: 7px;
            background: var(--green);
            border-radius: 50%;
        }

        .hero h1 {
            margin: 0 0 18px;
            color: var(--navy);
            font-size: clamp(32px, 5vw, 49px);
            line-height: 1.2;
            font-weight: 800;
            letter-spacing: -1.8px;
        }

        .hero h1 span {
            color: var(--green);
        }

        .hero p {
            max-width: 650px;
            margin: 0 auto;
            color: var(--muted);
            font-size: 15px;
            line-height: 1.9;
        }

        .section-underline {
            width: 50px;
            height: 4px;
            background-color: #ea580c;
            border-radius: 2px;
            margin: 22px auto 0 auto;
        }

        /* MAIN */
        .main-content {
            max-width: 1000px;
            margin: 0 auto;
            padding: 40px 24px 90px;
        }

        .path-list {
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        /* CARDS */
        .path-card {
            overflow: hidden;
            background: var(--white);
            border: 1px solid var(--border);
            border-radius: 24px;
            box-shadow: 0 8px 25px rgba(15, 23, 42, 0.045);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .path-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 16px 35px rgba(15, 23, 42, 0.08);
        }

        .card-content {
            padding: 32px 38px 28px;
        }

        .card-heading {
            text-align: center;
        }

        .path-badge {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            padding: 8px 14px;
            margin-bottom: 15px;
            border-radius: 999px;
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 0.7px;
        }

        .badge-green {
            color: #047857;
            background: #d1fae5;
        }

        .badge-blue {
            color: #1d4ed8;
            background: #dbeafe;
        }

        .badge-orange {
            color: #c2410c;
            background: #ffedd5;
        }

        .badge-purple {
            color: #7e22ce;
            background: #f3e8ff;
        }

        .card-heading h3 {
            margin: 0 0 7px;
            color: var(--navy);
            font-size: clamp(20px, 3vw, 25px);
            font-weight: 800;
            letter-spacing: -0.5px;
        }

        .card-subtitle {
            margin: 0;
            color: #94a3b8;
            font-size: 12px;
            font-weight: 700;
        }

        .card-description {
            max-width: 700px;
            margin: 22px auto 24px;
            color: #64748b;
            font-size: 13px;
            line-height: 1.9;
            text-align: center;
        }

        .feature-list {
            display: flex;
            flex-direction: column;
            gap: 14px;
            max-width: 580px;
            margin: 0 auto;
            padding: 22px 0;
            border-top: 1px solid #f1f5f9;
            border-bottom: 1px solid #f1f5f9;
        }

        .feature {
            display: flex;
            align-items: flex-start;
            gap: 11px;
            color: #475569;
            font-size: 13px;
            font-weight: 600;
            line-height: 1.6;
        }

        .check-icon {
            display: inline-flex;
            flex: 0 0 22px;
            width: 22px;
            height: 22px;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-size: 12px;
            font-weight: 800;
        }

        .check-green {
            color: #047857;
            background: #d1fae5;
        }

        .check-blue {
            color: #1d4ed8;
            background: #dbeafe;
        }

        .check-orange {
            color: #c2410c;
            background: #ffedd5;
        }

        .check-purple {
            color: #7e22ce;
            background: #f3e8ff;
        }

        .card-action {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            width: 100%;
            min-height: 58px;
            padding: 16px 24px;
            color: white;
            text-align: center;
            font-size: 13px;
            font-weight: 800;
            transition: background 0.2s ease;
        }

        .action-green {
            background: var(--green);
        }

        .action-green:hover {
            background: var(--green-dark);
        }

        .action-blue {
            background: #2563eb;
        }

        .action-blue:hover {
            background: #1d4ed8;
        }

        .action-orange {
            background: var(--orange);
        }

        .action-orange:hover {
            background: #ea580c;
        }

        .action-purple {
            background: #9333ea;
        }

        .action-purple:hover {
            background: #7e22ce;
        }

        .action-arrow {
            font-size: 18px;
            transition: transform 0.2s;
        }

        .card-action:hover .action-arrow {
            transform: translateX(4px);
        }

        /* FOOTER */
        .site-footer {
            padding: 32px 24px;
            background: #173f2b;
            color: #e6f3e9;
            text-align: center;
        }

        .footer-brand {
            margin-bottom: 8px;
            font-size: 20px;
            font-weight: 800;
        }

        .footer-brand span {
            color: #9bd5a8;
        }

        .site-footer p {
            margin: 5px 0;
            color: #c4d9ca;
            font-size: 12px;
            line-height: 1.8;
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <header class="navbar">
        <div class="nav-container">
            <a href="{{ url('/') }}" class="brand">
                <img src="{{ asset('images/logo-icon.png') }}" alt="VolunTrack Icon">
                <span class="brand-name">Volun<span>Track</span></span>
            </a>

            @include('partials.navbar')
        </div>
    </header>

    <!-- HERO JALUR PENDAFTARAN -->
    <section class="hero">
        <div class="hero-inner">
            <div class="eyebrow">
                <span class="eyebrow-dot"></span>
                PILIHAN PARTISIPASI
            </div>

            <h1>
                Temukan Jalur <span>Relawanmu!</span>
            </h1>
            <p>
                Setiap orang punya cara berbeda untuk membawa perubahan. Pilih jalur pendaftaran yang paling sesuai dengan kondisi, kemampuan, dan semangat kontribusimu bersama VolunTrack.
            </p>
            <div class="section-underline"></div>
        </div>
    </section>

    <!-- DAFTAR JALUR -->
    <main class="main-content">
        <div class="path-list">

            <!-- CARD 1: FULLY FUNDED -->
            <article class="path-card">
                <div class="card-content">
                    <div class="card-heading">
                        <span class="path-badge badge-green">✨ FULLY FUNDED</span>
                        <h3>Jalur Seleksi Nasional</h3>
                        <p class="card-subtitle">Program Ekspedisi Penuh</p>
                    </div>

                    <p class="card-description">
                        Pembiayaan penuh meliputi tiket pesawat, akomodasi, konsumsi, atribut, dan perizinan yang ditanggung sepenuhnya oleh panitia.
                    </p>

                    <div class="feature-list">
                        <div class="feature">
                            <span class="check-icon check-green">✓</span>
                            <span>Seleksi Berkas &amp; Wawancara</span>
                        </div>
                        <div class="feature">
                            <span class="check-icon check-green">✓</span>
                            <span>Gratis Biaya Program</span>
                        </div>
                        <div class="feature">
                            <span class="check-icon check-green">✓</span>
                            <span>Fasilitas Trip Premium</span>
                        </div>
                    </div>
                </div>

                <a href="{{ route('pendaftaran.program') }}" class="card-action action-green">
                    Daftar Jalur Ini <span class="action-arrow">→</span>
                </a>
            </article>

            <!-- CARD 2: PARTIALLY FUNDED -->
            <article class="path-card">
                <div class="card-content">
                    <div class="card-heading">
                        <span class="path-badge badge-blue">🌟 PARTIALLY FUNDED</span>
                        <h3>Jalur Mandiri &amp; Donasi</h3>
                        <p class="card-subtitle">Kontribusi Sebagian</p>
                    </div>

                    <p class="card-description">
                        Pilihan bagi relawan yang ingin ikut serta dengan kontribusi mandiri untuk akomodasi lokal selama kegiatan ekspedisi berlangsung.
                    </p>

                    <div class="feature-list">
                        <div class="feature">
                            <span class="check-icon check-blue">✓</span>
                            <span>Tanpa Seleksi Ketat</span>
                        </div>
                        <div class="feature">
                            <span class="check-icon check-blue">✓</span>
                            <span>Atribut &amp; Sertifikat Resmi</span>
                        </div>
                    </div>
                </div>

                <a href="{{ route('pendaftaran.program') }}" class="card-action action-blue">
                    Daftar Jalur Ini <span class="action-arrow">→</span>
                </a>
            </article>

            <!-- CARD 3: KEMITRAAN & CSR -->
            <article class="path-card">
                <div class="card-content">
                    <div class="card-heading">
                        <span class="path-badge badge-orange">🤝 CORPORATE &amp; COMMUNITY</span>
                        <h3>Jalur Kemitraan &amp; CSR</h3>
                        <p class="card-subtitle">Kolaborasi Organisasi</p>
                    </div>

                    <p class="card-description">
                        Dikhususkan bagi perwakilan instansi, korporasi, atau komunitas sosial yang ingin mendelegasikan anggotanya dalam program aksi kemanusiaan.
                    </p>

                    <div class="feature-list">
                        <div class="feature">
                            <span class="check-icon check-orange">✓</span>
                            <span>MoU Kerja Sama Instansi</span>
                        </div>
                        <div class="feature">
                            <span class="check-icon check-orange">✓</span>
                            <span>Laporan Dampak Sosial Berkala</span>
                        </div>
                    </div>
                </div>

                <a href="{{ route('pendaftaran.program') }}" class="card-action action-orange">
                    Daftar Jalur Ini <span class="action-arrow">→</span>
                </a>
            </article>

            <!-- CARD 4: DUTA RELAWAN -->
            <article class="path-card">
                <div class="card-content">
                    <div class="card-heading">
                        <span class="path-badge badge-purple">👑 AMBASSADOR TRACK</span>
                        <h3>Jalur Duta Relawan</h3>
                        <p class="card-subtitle">Penggerak Sosial Kehormatan</p>
                    </div>

                    <p class="card-description">
                        Jalur khusus bagi pegiat media sosial dan aktivis berpengalaman yang terpilih menjadi representatif dan pemimpin kelompok relawan di lapangan.
                    </p>

                    <div class="feature-list">
                        <div class="feature">
                            <span class="check-icon check-purple">✓</span>
                            <span>Hak Istimewa Akses Ekspedisi</span>
                        </div>
                        <div class="feature">
                            <span class="check-icon check-purple">✓</span>
                            <span>Sertifikat Eksklusif &amp; Penghargaan</span>
                        </div>
                    </div>
                </div>

                <a href="{{ route('pendaftaran.program') }}" class="card-action action-purple">
                    Daftar Jalur Ini <span class="action-arrow">→</span>
                </a>
            </article>

        </div>
    </main>

    <!-- FOOTER -->
    <footer class="site-footer">
        <div class="footer-brand">
            Volun<span>Track</span>
        </div>
        <p>Bersama, kita ciptakan perubahan yang berarti.</p>
        <p>&copy; {{ date('Y') }} VolunTrack. Semua hak dilindungi.</p>
    </footer>

</body>
</html>