<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="VolunTrack menghubungkan relawan dengan program sosial, kemanusiaan, dan lingkungan di Indonesia.">

    <title>VolunTrack — Bergerak Bersama, Berdampak Nyata</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=plus-jakarta-sans:400,500,600,700,800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        :root {
            --green: #16845b;
            --green-dark: #106747;
            --green-light: #e9f8ef;
            --green-soft: #f3faf5;
            --navy: #10251e;
            --text: #24332c;
            --muted: #66756c;
            --orange: #ea580c;
            --orange-hover: #c94708;
            --white: #ffffff;
            --border: #e5ede7;
            --radius: 24px;
            --shadow: 0 16px 45px rgba(27, 66, 46, .08);
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 95px;
        }

        body {
            margin: 0;
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: var(--white);
            color: var(--text);
            line-height: 1.7;
            -webkit-font-smoothing: antialiased;
        }

        body, h1, h2, h3, p {
            margin-top: 0;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        img {
            display: block;
            max-width: 100%;
        }

        button, a {
            -webkit-tap-highlight-color: transparent;
        }

        .container {
            width: min(1160px, calc(100% - 48px));
            margin-inline: auto;
        }

        .section {
            padding: 92px 0;
        }

        .section-soft {
            background: var(--green-soft);
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 7px 13px;
            border: 1px solid #d5efdf;
            border-radius: 999px;
            background: var(--green-light);
            color: var(--green-dark);
            font-size: 12px;
            font-weight: 800;
            letter-spacing: .04em;
        }

        .section-heading {
            max-width: 680px;
            margin: 0 auto 42px;
            text-align: center;
        }

        .section-heading h2 {
            margin: 17px 0 14px;
            color: var(--navy);
            font-size: clamp(28px, 4vw, 40px);
            line-height: 1.2;
            letter-spacing: -.045em;
        }

        .section-heading p {
            margin-bottom: 0;
            color: var(--muted);
            font-size: 15px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            min-height: 49px;
            padding: 13px 21px;
            border: 1px solid transparent;
            border-radius: 14px;
            font: inherit;
            font-size: 14px;
            font-weight: 800;
            text-align: center;
            transition: background .2s ease, color .2s ease,
                        transform .2s ease, box-shadow .2s ease;
            cursor: pointer;
        }

        .btn:hover {
            transform: translateY(-2px);
        }

        .btn-orange {
            background: var(--orange);
            color: white;
            box-shadow: 0 8px 20px rgba(234, 88, 12, .18);
        }

        .btn-orange:hover {
            background: var(--orange-hover);
            box-shadow: 0 12px 24px rgba(234, 88, 12, .23);
        }

        .btn-green {
            background: var(--green);
            color: white;
        }

        .btn-green:hover {
            background: var(--green-dark);
        }

        .btn-outline {
            border-color: #d7e6dc;
            background: white;
            color: var(--green-dark);
        }

        .btn-outline:hover {
            background: var(--green-light);
        }

        /* NAVBAR */
        .site-header {
            position: sticky;
            top: 0;
            z-index: 100;
            border-bottom: 1px solid rgba(222, 234, 225, .85);
            background: rgba(255, 255, 255, .94);
            backdrop-filter: blur(16px);
        }

        .navbar {
            min-height: 78px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 28px;
        }

        .brand {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            flex-shrink: 0;
        }

        .brand img {
            width: 42px;
            height: 42px;
            object-fit: contain;
        }

        .brand-name {
            color: var(--green-dark);
            font-size: 24px;
            font-weight: 800;
            letter-spacing: -.06em;
        }

        .brand-name span {
            color: #37a878;
        }

        .nav-links {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 29px;
        }

        .nav-links a,
        .login-link {
            color: #526158;
            font-size: 13px;
            font-weight: 700;
            transition: color .2s ease;
        }

        .nav-links a:hover,
        .login-link:hover {
            color: var(--green);
        }

        .nav-actions {
            display: flex;
            align-items: center;
            gap: 15px;
            flex-shrink: 0;
        }

        .mobile-menu {
            display: none;
            position: relative;
        }

        .mobile-menu summary {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 44px;
            height: 44px;
            border: 1px solid var(--border);
            border-radius: 12px;
            color: var(--green-dark);
            font-size: 22px;
            cursor: pointer;
            list-style: none;
        }

        .mobile-menu summary::-webkit-details-marker {
            display: none;
        }

        .mobile-panel {
            position: absolute;
            top: 56px;
            right: 0;
            width: min(280px, calc(100vw - 48px));
            padding: 12px;
            border: 1px solid var(--border);
            border-radius: 18px;
            background: white;
            box-shadow: var(--shadow);
        }

        .mobile-panel a {
            display: block;
            padding: 12px;
            border-radius: 10px;
            color: var(--text);
            font-size: 14px;
            font-weight: 700;
        }

        .mobile-panel a:hover {
            background: var(--green-light);
            color: var(--green-dark);
        }

        /* HERO & DEKORASI */
        .hero {
            position: relative;
            isolation: isolate;
            overflow: hidden;
            padding: 76px 0 84px;
            background: 
                radial-gradient(circle at 90% 15%, rgba(16, 185, 129, 0.12), transparent 38%),
                linear-gradient(180deg, #ffffff 0%, #f8fcf8 100%);
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

        .hero-grid {
            display: grid;
            grid-template-columns: 1.02fr .98fr;
            align-items: center;
            gap: 68px;
        }

        .hero-copy h1 {
            max-width: 650px;
            margin: 23px 0 22px;
            color: var(--navy);
            font-size: clamp(39px, 5.1vw, 61px);
            font-weight: 800;
            line-height: 1.12;
            letter-spacing: -.06em;
        }

        .hero-copy h1 span {
            color: var(--green);
        }

        .hero-description {
            max-width: 555px;
            margin-bottom: 29px;
            color: var(--muted);
            font-size: 16px;
            line-height: 1.9;
        }

        .hero-actions {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 12px;
        }

        .hero-visual {
            position: relative;
            max-width: 510px;
            margin-left: auto;
            width: 100%;
        }

        .hero-image-frame {
            position: relative;
            padding: 11px;
            border: 1px solid #dcece0;
            border-radius: 32px;
            background: white;
            box-shadow: 0 28px 65px rgba(27, 66, 46, .13);
        }

        .hero-image {
            width: 100%;
            height: 420px;
            border-radius: 24px;
            object-fit: cover;
            object-position: center;
        }

        .floating-card {
            position: absolute;
            left: -36px;
            bottom: 28px;
            display: flex;
            align-items: center;
            gap: 12px;
            max-width: 260px;
            padding: 15px 18px;
            border: 1px solid #e7efe8;
            border-radius: 18px;
            background: rgba(255, 255, 255, .97);
            box-shadow: 0 14px 35px rgba(23, 52, 35, .12);
        }

        .floating-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 43px;
            height: 43px;
            flex-shrink: 0;
            border-radius: 14px;
            background: var(--green-light);
            font-size: 22px;
        }

        .floating-card strong {
            display: block;
            color: var(--navy);
            font-size: 13px;
        }

        .floating-card small {
            display: block;
            color: var(--muted);
            font-size: 11px;
        }

        /* PROGRAM / CARDS DENGAN EFEK SHADOW GLOW ORANYE */
        .program-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 26px;
        }

        .program-card {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding: 36px 30px;
            border-radius: 24px;
            background: linear-gradient(135deg, #ffffff 0%, #fef8f2 100%);
            border: 2px solid #ffedd5;
            box-shadow: 0 12px 35px rgba(249, 115, 22, 0.10), 0 4px 12px rgba(249, 115, 22, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
        }

        .program-card:hover {
            transform: translateY(-5px);
            border-color: #fed7aa;
            box-shadow: 0 18px 45px rgba(249, 115, 22, 0.18), 0 6px 16px rgba(249, 115, 22, 0.10);
        }

        .program-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 64px;
            height: 64px;
            margin-bottom: 20px;
            border-radius: 18px;
            background: #fff7ed;
            border: 1px solid #fed7aa;
            font-size: 28px;
            box-shadow: 0 6px 16px rgba(249, 115, 22, 0.12);
        }

        .program-card h3 {
            margin-bottom: 10px;
            color: var(--navy);
            font-size: 18px;
            font-weight: 800;
            line-height: 1.4;
        }

        .program-card p {
            margin-bottom: 22px;
            color: var(--muted);
            font-size: 13px;
            line-height: 1.9;
        }

        .text-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-top: auto;
            color: var(--green-dark);
            font-size: 13px;
            font-weight: 800;
        }

        .text-link:hover {
            color: var(--orange);
        }

        /* HOW IT WORKS / STEPS */
        .steps-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 30px;
        }

        /* EFEK SHADOW-LAYERED CARD HIJAU (CARA KERJA) */
        .step-card {
            position: relative;
            padding: 36px 30px;
            border-radius: 24px;
            background: linear-gradient(135deg, #ffffff 0%, #f4faf6 100%);
            border: 2px solid #d1fae5;
            box-shadow: 0 12px 35px rgba(5, 150, 105, 0.08), 0 4px 12px rgba(5, 150, 105, 0.04);
            transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
        }

        .step-card:hover {
            transform: translateY(-5px);
            border-color: #a7f3d0;
            box-shadow: 0 18px 45px rgba(5, 150, 105, 0.16), 0 6px 16px rgba(5, 150, 105, 0.08);
        }

        .step-number {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 42px;
            height: 42px;
            margin-bottom: 18px;
            border-radius: 13px;
            background: var(--green);
            color: white;
            font-size: 15px;
            font-weight: 800;
        }

        .step-card h3 {
            margin-bottom: 9px;
            color: var(--navy);
            font-size: 17px;
        }

        .step-card p {
            margin-bottom: 0;
            color: var(--muted);
            font-size: 13px;
            line-height: 1.9;
        }

        /* CTA */
        .cta-section {
            padding: 78px 0;
            background: white;
        }

        .cta-panel {
            position: relative;
            overflow: hidden;
            padding: 58px 30px;
            border-radius: 30px;
            background: linear-gradient(125deg, #103f2c, #16845b);
            color: white;
            text-align: center;
        }

        .cta-panel h2 {
            max-width: 650px;
            margin: 0 auto 15px;
            font-size: clamp(28px, 4vw, 40px);
            line-height: 1.25;
            letter-spacing: -.04em;
        }

        .cta-panel p {
            max-width: 570px;
            margin: 0 auto 26px;
            color: #d5f3df;
            font-size: 14px;
        }

        .cta-actions {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 12px;
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

        /* RESPONSIVE */
        @media (max-width: 1000px) {
            .hero-grid {
                gap: 38px;
            }
            .hero-copy h1 {
                font-size: clamp(38px, 5vw, 51px);
            }
            .hero-image {
                height: 360px;
            }
            .floating-card {
                left: -15px;
            }
        }

        @media (max-width: 760px) {
            .container {
                width: min(100% - 36px, 560px);
            }
            .section {
                padding: 68px 0;
            }
            .nav-links {
                display: none;
            }
            .mobile-menu {
                display: block;
            }
            .hero-grid {
                grid-template-columns: 1fr;
                gap: 43px;
            }
            .program-grid,
            .steps-grid {
                grid-template-columns: 1fr;
                gap: 16px;
            }
        }
    </style>
</head>

<body>

    {{-- NAVBAR --}}
    <header class="site-header">
        <div class="container navbar">
            <a href="{{ url('/') }}" class="brand" aria-label="VolunTrack Beranda">
                <img src="{{ asset('images/logo-icon.png') }}" alt="Logo VolunTrack" onerror="this.style.display='none'">
                <span class="brand-name">Volun<span>Track</span></span>
            </a>

            @include('partials.navbar')

            <details class="mobile-menu">
                <summary aria-label="Buka menu navigasi">☰</summary>
                <nav class="mobile-panel" aria-label="Navigasi seluler">
                    <a href="{{ url('/') }}">Beranda</a>
                    <a href="{{ url('/tentang') }}">Tentang</a>
                    <a href="{{ route('activities.index') }}">Program Aksi</a>
                    <a href="{{ url('/jalur-daftar') }}">Jalur Daftar</a>
                    <a href="{{ route('faq') }}">FAQ</a>

                    @auth
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Masuk</a>
                        <a href="{{ route('register') }}">Daftar Sekarang</a>
                    @endauth
                </nav>
            </details>
        </div>
    </header>

    <main>

        {{-- HERO --}}
        <section class="hero">
            <div class="container hero-grid">
                <div class="hero-copy">
                    <span class="eyebrow">
                        <span aria-hidden="true"></span>
                        BERSAMA UNTUK SESAMA
                    </span>

                    <h1>
                        Hubungkan Aksi<br>
                        <span>Kebaikan Bersama</span><br>
                         VolunTrack
                    </h1>

                    <p class="hero-description">
                        Temukan kesempatan untuk membantu sesama, menjaga lingkungan, dan bertemu orang-orang baik. Bersama VolunTrack, setiap langkah kecil bisa menjadi perubahan yang berarti.
                    </p>

                    <div class="hero-actions">
                        <a href="{{ route('activities.index') }}" class="btn btn-orange">
                            Temukan Program Aksi
                            <span aria-hidden="true">→</span>
                        </a>

                        @auth
                            <a href="{{ url('/dashboard') }}" class="btn btn-outline">
                                Buka Dashboard
                            </a>
                        @else
                            <a href="{{ route('register') }}" class="btn btn-outline">
                                Gabung Jadi Relawan
                            </a>
                        @endauth
                    </div>
                </div>

                <div class="hero-visual">
                    <div class="hero-image-frame">
                        <img class="hero-image" src="{{ asset('images/papua.jpg') }}" alt="Relawan bekerja sama dalam kegiatan sosial" fetchpriority="high" onerror="this.onerror=null;this.src='{{ asset('images/relawan.jpg') }}'">
                    </div>

                    <div class="floating-card">
                        <div class="floating-icon" aria-hidden="true">💚</div>
                        <div>
                            <strong>Satu aksi, banyak arti</strong>
                            <small>Mulai berbagi dari hal sederhana</small>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- PROGRAM AKSI --}}
        <section class="section" id="program">
            <div class="container">
                <div class="section-heading">
                    <span class="eyebrow">RUANG UNTUK BERBUAT BAIK</span>
                    <h2>Kebaikan punya banyak cara</h2>
                    <p>
                        Pilih bidang yang dekat dengan hati kamu. Setiap orang punya kesempatan untuk memberikan dampak positif.
                    </p>
                </div>

                <div class="program-grid">
                    <article class="program-card">
                        <div class="program-icon" aria-hidden="true">💚</div>
                        <h3>Aksi Kemanusiaan</h3>
                        <p>
                            Berkontribusi dalam kegiatan sosial, bantuan masyarakat, dan gerakan solidaritas bagi mereka yang membutuhkan.
                        </p>
                        <a href="{{ route('activities.index') }}" class="text-link">
                            Jelajahi program <span aria-hidden="true">→</span>
                        </a>
                    </article>

                    <article class="program-card">
                        <div class="program-icon" aria-hidden="true">🌳</div>
                        <h3>Peduli Lingkungan</h3>
                        <p>
                            Ambil bagian dalam kegiatan menjaga alam, kebersihan lingkungan, dan membangun kebiasaan yang lebih berkelanjutan.
                        </p>
                        <a href="{{ route('activities.index') }}" class="text-link">
                            Jelajahi program <span aria-hidden="true">→</span>
                        </a>
                    </article>

                    <article class="program-card">
                        <div class="program-icon" aria-hidden="true">📚</div>
                        <h3>Pendidikan & Sosial</h3>
                        <p>
                            Bagikan pengetahuan, dukung kegiatan belajar, dan bantu menciptakan kesempatan yang lebih baik.
                        </p>
                        <a href="{{ route('activities.index') }}" class="text-link">
                            Jelajahi program <span aria-hidden="true">→</span>
                        </a>
                    </article>
                </div>
            </div>
        </section>

        {{-- CARA KERJA --}}
        <section class="section section-soft" id="cara-kerja">
            <div class="container">
                <div class="section-heading">
                    <span class="eyebrow">MULAI DARI SINI</span>
                    <h2>Langkah sederhana untuk mulai berkontribusi</h2>
                    <p>
                        Tidak perlu menunggu menjadi sempurna untuk melakukan sesuatu yang bermanfaat.
                    </p>
                </div>

                <div class="steps-grid">
                    <article class="step-card">
                        <span class="step-number">01</span>
                        <h3>Kenali programnya</h3>
                        <p>
                            Jelajahi halaman Program Aksi untuk mengenal kegiatan dan menemukan kesempatan yang sesuai dengan minatmu.
                        </p>
                    </article>

                    <article class="step-card">
                        <span class="step-number">02</span>
                        <h3>Buat akun relawan</h3>
                        <p>
                            Daftarkan akunmu agar bisa mulai menggunakan fitur yang tersedia untuk pengguna VolunTrack.
                        </p>
                    </article>

                    <article class="step-card">
                        <span class="step-number">03</span>
                        <h3>Ambil bagian dalam kebaikan</h3>
                        <p>
                            Ikuti informasi dan proses pendaftaran program, lalu berkontribusilah sesuai ketentuan kegiatan.
                        </p>
                    </article>
                </div>
            </div>
        </section>

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