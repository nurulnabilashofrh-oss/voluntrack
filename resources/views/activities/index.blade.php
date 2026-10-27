<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Program Aksi Sosial - VolunTrack</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=plus-jakarta-sans:400,500,600,700,800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        :root {
            --green: #25834b;
            --green-dark: #185c37;
            --green-light: #edf7ef;
            --orange: #f28b35;
            --text: #20352a;
            --muted: #718078;
            --border: #e4ede6;
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: #f8fbf8;
            color: var(--text);
            margin: 0;
        }

        a {
            text-decoration: none;
        }

        /* NAVBAR */
        .site-header {
            position: sticky;
            top: 0;
            z-index: 50;
            background: rgba(255, 255, 255, .97);
            border-bottom: 1px solid var(--border);
            box-shadow: 0 3px 12px rgba(20, 60, 35, .04);
        }

        .navbar {
            max-width: 1280px;
            min-height: 80px;
            margin: auto;
            padding: 12px 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            flex-shrink: 0;
        }

        .brand img {
            width: 46px;
            height: 46px;
            object-fit: contain;
        }

        .brand-name {
            color: var(--green-dark);
            font-size: 24px;
            font-weight: 800;
            letter-spacing: -.8px;
        }

        .brand-name span {
            color: var(--green);
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 25px;
        }

        .nav-links a {
            color: #56675d;
            font-size: 13px;
            font-weight: 600;
            transition: color .2s;
            white-space: nowrap;
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: var(--green);
        }

        .nav-actions {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .nav-actions a {
            padding: 11px 17px;
            border-radius: 10px;
            font-size: 13px;
            font-weight: 700;
            white-space: nowrap;
            transition: .2s;
        }

        .dashboard-btn {
            background: var(--green);
            color: white;
            box-shadow: 0 4px 12px rgba(37, 131, 75, .2);
        }

        .dashboard-btn:hover {
            background: var(--green-dark);
            transform: translateY(-1px);
        }

        /* HERO & DEKORASI */
        .hero {
            position: relative;
            isolation: isolate;
            overflow: hidden;
            background: 
                radial-gradient(circle at 90% 15%, rgba(16, 185, 129, 0.12), transparent 38%),
                linear-gradient(180deg, #ffffff 0%, #f7fbf7 100%);
            padding: 60px 24px 50px;
            text-align: center;
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
            position: relative;
            max-width: 850px;
            margin: auto;
        }

        .hero-label {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 9px 15px;
            border: 1px solid #cce5d1;
            border-radius: 999px;
            background: #ffffff;
            color: var(--green-dark);
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 1px;
        }

        .hero h1 {
            margin: 20px 0 16px;
            color: #20352a;
            font-size: clamp(34px, 5vw, 51px);
            font-weight: 800;
            line-height: 1.18;
            letter-spacing: -1.8px;
        }

        .hero h1 span {
            color: var(--green);
        }

        .hero-description {
            max-width: 690px;
            margin: 0 auto;
            color: var(--muted);
            font-size: 15px;
            line-height: 1.9;
        }

        .section-underline {
            width: 55px;
            height: 4px;
            margin: 22px auto 0;
            border-radius: 20px;
            background: var(--orange);
        }

        /* PROGRAM */
        .program-section {
            max-width: 1280px;
            margin: auto;
            padding: 40px 24px 80px;
        }

        /* GRID 9 PROGRAM */
        .program-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 26px;
        }

        .program-card {
            display: flex;
            flex-direction: column;
            overflow: hidden;
            min-width: 0;
            border: 1px solid var(--border);
            border-radius: 19px;
            background: white;
            box-shadow: 0 6px 24px rgba(32, 76, 45, .045);
            transition: transform .25s, box-shadow .25s, border-color .25s;
        }

        .program-card:hover {
            transform: translateY(-5px);
            border-color: #c8e3ce;
            box-shadow: 0 15px 32px rgba(32, 76, 45, .10);
        }

        .program-image {
            position: relative;
            height: 220px;
            overflow: hidden;
            background: #e8f3e9;
        }

        .program-image img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .45s;
        }

        .program-card:hover .program-image img {
            transform: scale(1.045);
        }

        .program-content {
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            padding: 23px;
            gap: 13px;
        }

        .program-category {
            display: inline-block;
            align-self: flex-start;
            padding: 7px 11px;
            border-radius: 30px;
            background: var(--green-light);
            color: var(--green-dark);
            font-size: 10px;
            font-weight: 800;
        }

        .program-category.blue {
            background: #edf4ff;
            color: #3267ac;
        }

        .program-category.orange {
            background: #fff2e7;
            color: #b85e17;
        }

        .program-content h3 {
            margin: 0;
            color: #20352a;
            font-size: 17px;
            font-weight: 800;
            line-height: 1.55;
        }

        .program-description {
            margin: 0;
            color: #718078;
            font-size: 12px;
            line-height: 1.9;
        }

        .program-location {
            display: flex;
            align-items: flex-start;
            gap: 9px;
            margin-top: auto;
            padding-top: 15px;
            border-top: 1px solid #edf1ed;
            color: #53665a;
            font-size: 11px;
            line-height: 1.8;
        }

        .location-icon {
            flex-shrink: 0;
            color: var(--green);
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
        @media (max-width: 1050px) {
            .navbar {
                flex-wrap: wrap;
            }
            .program-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 650px) {
            .program-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <header class="site-header">
        <div class="navbar">
            <a href="{{ url('/') }}" class="brand">
                <img src="{{ asset('images/logo-icon.png') }}" alt="Logo VolunTrack">
                <span class="brand-name">Volun<span>Track</span></span>
            </a>
            @include('partials.navbar')
        </div>
    </header>

    <!-- HERO -->
    <section class="hero">
        <div class="hero-inner">
            <span class="hero-label">DAFTAR KEGIATAN</span>

            <h1>
                Program Aksi <span>Sosial</span>
            </h1>

            <p class="hero-description">
                Pilih dan ikuti berbagai aksi kemanusiaan serta lingkungan bersama relawan lainnya. Satu langkah kecilmu bisa membawa perubahan besar bagi sesama.
            </p>

            <div class="section-underline"></div>
        </div>
    </section>

    <!-- DAFTAR 9 PROGRAM AKSI -->
    <main class="program-section">
        <div class="program-grid">

            <!-- PROGRAM 1 -->
            <article class="program-card">
                <div class="program-image">
                    <img src="{{ asset('images/activities/mangrove.jpg') }}" alt="Konservasi Mangrove Nusantara" loading="lazy">
                </div>
                <div class="program-content">
                    <span class="program-category">Pelestarian Alam</span>
                    <h3>Konservasi Mangrove Nusantara</h3>
                    <p class="program-description">
                        Aksi penanaman bibit mangrove bersama masyarakat pesisir untuk membantu mencegah abrasi pantai.
                    </p>
                    <div class="program-location">
                        <span class="location-icon">📍</span>
                        <span>Pesisir Pantai Cilacap, Jawa Tengah</span>
                    </div>
                </div>
            </article>

            <!-- PROGRAM 2 -->
            <article class="program-card">
                <div class="program-image">
                    <img src="{{ asset('images/activities/buku.jpg') }}" alt="Kelas Inspirasi Nusantara" loading="lazy">
                </div>
                <div class="program-content">
                    <span class="program-category blue">Pendidikan</span>
                    <h3>Kelas Inspirasi Nusantara</h3>
                    <p class="program-description">
                        Berbagi motivasi dan mengajar anak-anak di daerah 3T untuk menumbuhkan semangat belajar.
                    </p>
                    <div class="program-location">
                        <span class="location-icon">📍</span>
                        <span>Kabupaten Alor, Nusa Tenggara Timur</span>
                    </div>
                </div>
            </article>

            <!-- PROGRAM 3 -->
            <article class="program-card">
                <div class="program-image">
                    <img src="{{ asset('images/activities/baksos.jpg') }}" alt="Bakti Sehat Desa" loading="lazy">
                </div>
                <div class="program-content">
                    <span class="program-category orange">Kesehatan</span>
                    <h3>Bakti Sehat Desa &amp; Penyuluhan</h3>
                    <p class="program-description">
                        Pemeriksaan kesehatan gratis dan penyuluhan pola hidup bersih bagi warga desa.
                    </p>
                    <div class="program-location">
                        <span class="location-icon">📍</span>
                        <span>Desa Karangduwur, Kebumen</span>
                    </div>
                </div>
            </article>

            <!-- PROGRAM 4 -->
            <article class="program-card">
                <div class="program-image">
                    <img src="{{ asset('images/activities/papua.jpg') }}" alt="Ekspedisi Sapa Papua" loading="lazy">
                </div>
                <div class="program-content">
                    <span class="program-category">Ekspedisi</span>
                    <h3>Ekspedisi Sapa Papua</h3>
                    <p class="program-description">
                        Misi pengabdian sosial yang mencakup pendidikan, kesehatan, dan pemberdayaan ekonomi masyarakat.
                    </p>
                    <div class="program-location">
                        <span class="location-icon">📍</span>
                        <span>Kabupaten Asmat, Papua Selatan</span>
                    </div>
                </div>
            </article>

            <!-- PROGRAM 5 -->
            <article class="program-card">
                <div class="program-image">
                    <img src="{{ asset('images/activities/pohon.jpg') }}" alt="Reboisasi Hutan Gundul" loading="lazy">
                </div>
                <div class="program-content">
                    <span class="program-category">Lingkungan</span>
                    <h3>Reboisasi Hutan Gundul</h3>
                    <p class="program-description">
                        Gerakan penanaman pohon untuk membantu memulihkan ekosistem dan menjaga kelestarian hutan.
                    </p>
                    <div class="program-location">
                        <span class="location-icon">📍</span>
                        <span>Lereng Gunung Merbabu, Jawa Tengah</span>
                    </div>
                </div>
            </article>

            <!-- PROGRAM 6 -->
            <article class="program-card">
                <div class="program-image">
                    <img src="{{ asset('images/activities/ramadhan.jpg') }}" alt="Ramadhan Berbagi" loading="lazy">
                </div>
                <div class="program-content">
                    <span class="program-category orange">Sosial</span>
                    <h3>Ramadhan Berbagi &amp; Sembako</h3>
                    <p class="program-description">
                        Penyaluran paket makanan dan sembako bagi masyarakat yang membutuhkan.
                    </p>
                    <div class="program-location">
                        <span class="location-icon">📍</span>
                        <span>Kawasan Jabodetabek</span>
                    </div>
                </div>
            </article>

            <!-- PROGRAM 7 -->
            <article class="program-card">
                <div class="program-image">
                    <img src="{{ asset('images/activities/trauma-healing.jpg') }}" alt="Trauma Healing Korban Bencana" loading="lazy">
                </div>
                <div class="program-content">
                    <span class="program-category blue">Kemanusiaan</span>
                    <h3>Trauma Healing Korban Bencana</h3>
                    <p class="program-description">
                        Pendampingan psikososial dan kegiatan edukatif untuk mendukung anak-anak pascabencana.
                    </p>
                    <div class="program-location">
                        <span class="location-icon">📍</span>
                        <span>Kabupaten Cianjur, Jawa Barat</span>
                    </div>
                </div>
            </article>

            <!-- PROGRAM 8 -->
            <article class="program-card">
                <div class="program-image">
                    <img src="{{ asset('images/activities/umkm.jpg') }}" alt="Pemberdayaan UMKM Desa" loading="lazy">
                </div>
                <div class="program-content">
                    <span class="program-category orange">Ekonomi</span>
                    <h3>Pemberdayaan UMKM Desa</h3>
                    <p class="program-description">
                        Pelatihan pemasaran digital dan pengelolaan keuangan bagi pelaku usaha mikro.
                    </p>
                    <div class="program-location">
                        <span class="location-icon">📍</span>
                        <span>Kabupaten Sleman, D.I. Yogyakarta</span>
                    </div>
                </div>
            </article>

            <!-- PROGRAM 9 -->
            <article class="program-card">
                <div class="program-image">
                    <img src="{{ asset('images/activities/anak-jalanan.jpg') }}" alt="Rumah Belajar Anak Jalanan" loading="lazy">
                </div>
                <div class="program-content">
                    <span class="program-category blue">Pendidikan</span>
                    <h3>Rumah Belajar Anak Jalanan</h3>
                    <p class="program-description">
                        Kegiatan belajar dan baca tulis gratis untuk membantu anak-anak mendapatkan kesempatan pendidikan.
                    </p>
                    <div class="program-location">
                        <span class="location-icon">📍</span>
                        <span>Kota Surabaya, Jawa Timur</span>
                    </div>
                </div>
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