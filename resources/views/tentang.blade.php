<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Kenali VolunTrack, platform yang membantu menghubungkan relawan dengan kesempatan berbuat baik.">

    <title>Tentang Kami — VolunTrack</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=plus-jakarta-sans:400,500,600,700,800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        :root {
            --green: #16845b;
            --green-dark: #106747;
            --green-light: #e9f8ef;
            --green-soft: #f5faf6;
            --navy: #10251e;
            --text: #24332c;
            --muted: #66756c;
            --orange: #ea580c;
            --border: #e4ede6;
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 90px;
        }

        body {
            margin: 0;
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--text);
            background: #fff;
            line-height: 1.7;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        img {
            display: block;
            max-width: 100%;
        }

        .container {
            width: min(1120px, calc(100% - 40px));
            margin: auto;
        }

        .navbar {
            position: sticky;
            top: 0;
            z-index: 10;
            background: rgba(255,255,255,.96);
            border-bottom: 1px solid var(--border);
            backdrop-filter: blur(14px);
        }

        .nav-inner {
            min-height: 76px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 10px;
            flex-shrink: 0;
        }

        .brand img {
            width: 40px;
            height: 40px;
            object-fit: contain;
        }

        .brand-name {
            font-size: 23px;
            font-weight: 800;
            letter-spacing: -1px;
            color: var(--green-dark);
        }

        .brand-name span {
            color: #37a878;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 25px;
        }

        .nav-links a {
            color: #58675e;
            font-size: 13px;
            font-weight: 700;
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: var(--green);
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            min-height: 46px;
            padding: 11px 19px;
            border-radius: 13px;
            font-size: 13px;
            font-weight: 800;
            transition: .2s ease;
        }

        .btn:hover {
            transform: translateY(-2px);
        }

        .btn-orange {
            background: var(--orange);
            color: #fff;
        }

        .btn-orange:hover {
            background: #c94708;
        }

        .btn-green {
            background: var(--green);
            color: #fff;
        }

        .btn-outline {
            border: 1px solid #d8e7dc;
            color: var(--green-dark);
            background: white;
        }

        .hero {
            padding: 80px 0;
            background:
                radial-gradient(ellipse at 90% 10%, #e2f7e9, transparent 36%),
                linear-gradient(180deg, #fff, #f7fbf7);
        }

       /* Samakan proporsi foto Tentang dengan Beranda */
.hero-grid {
    display: grid;
    grid-template-columns: 1.05fr 0.95fr;
    align-items: center;
    gap: 56px;
}


        .eyebrow {
            display: inline-block;
            padding: 7px 13px;
            border: 1px solid #d5efdf;
            border-radius: 999px;
            background: var(--green-light);
            color: var(--green-dark);
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 1px;
        }

        h1, h2, h3, p {
            margin-top: 0;
        }

        
        
.hero h1 {
    margin: 20px 0;
    color: var(--navy);
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: clamp(40px, 5vw, 62px);
    font-weight: 800;
    line-height: 1.1;
    letter-spacing: -2.5px;
}

.hero h1 span {
    color: var(--green);
    font-weight: 800;
}

.hero p {
    margin-bottom: 25px;
    color: var(--muted);
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 16px;
    font-weight: 400;
    line-height: 1.9;
}


        .hero-image-wrap {
    width: 100%;
    max-width: none;
    height: 460px;
    margin-top: -20px;
    justify-self: stretch;
    align-self: center;
    position: relative;
    border: 10px solid #ffffff;
    border-radius: 32px;
    overflow: hidden;
    box-shadow: 0 20px 50px rgba(15, 45, 35, 0.10);
}


        .hero-image {
            width: 100%;
            height: 390px;
            border-radius: 20px;
            object-fit: cover;
        }

        .section {
            padding: 82px 0;
        }

        .section-soft {
            background: var(--green-soft);
        }

        .section-heading {
            max-width: 680px;
            margin: 0 auto 42px;
            text-align: center;
        }

        .section-heading h2 {
            margin: 15px 0;
            color: var(--navy);
            font-size: clamp(27px, 3.5vw, 38px);
            line-height: 1.25;
            letter-spacing: -1.3px;
        }

        .section-heading p {
            color: var(--muted);
            font-size: 14px;
        }

        .story-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 24px;
        }

      /* Base Card Styling */
        .story-card {
            position: relative;
            overflow: hidden;
            border-radius: 24px;
            padding: 36px 30px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .story-card:hover {
            transform: translateY(-5px);
        }

        .story-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 64px;
            height: 64px;
            margin: 0 auto 20px auto;
            border-radius: 18px;
            font-size: 28px;
            transition: transform 0.3s ease;
        }

        .story-card h3 {
            margin-bottom: 12px;
            color: var(--navy);
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 20px;
            font-weight: 800;
        }

        .story-card p {
            margin-bottom: 0;
            color: var(--muted);
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 14px;
            line-height: 1.8;
        }

        /* TEMA 1: ORANYE MUDA (Untuk Mengenal Kami) */
        .story-card-orange {
            background: linear-gradient(135deg, #ffffff 0%, #fff7ed 100%);
            border: 2px solid #ffedd5;
            box-shadow: 0 12px 35px rgba(249, 115, 22, 0.12), 0 4px 12px rgba(249, 115, 22, 0.06);
        }
        .story-card-orange:hover {
            box-shadow: 0 18px 45px rgba(249, 115, 22, 0.18), 0 6px 16px rgba(249, 115, 22, 0.10);
        }
        .story-card-orange .story-icon {
            background: #ffedd5;
            border: 1px solid #fed7aa;
            box-shadow: 0 6px 16px rgba(249, 115, 22, 0.15);
        }

        /* TEMA 2: SHADOW GLOW HIJAU (Untuk Visi dan Misi) */
        .story-card-green {
            background: linear-gradient(135deg, #ffffff 0%, #f0fdf4 100%);
            border: 2px solid #dcfce7;
            box-shadow: 0 12px 35px rgba(16, 185, 129, 0.12), 0 4px 12px rgba(16, 185, 129, 0.06);
        }
        .story-card-green:hover {
            box-shadow: 0 18px 45px rgba(16, 185, 129, 0.18), 0 6px 16px rgba(16, 185, 129, 0.10);
        }
        .story-card-green .story-icon {
            background: #dcfce7;
            border: 1px solid #a7f3d0;
            box-shadow: 0 6px 16px rgba(16, 185, 129, 0.15);
        }

        .story-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 64px;
            height: 64px;
            margin: 0 auto 20px auto; /* Membuat ikon otomatis berada di tengah */
            border-radius: 18px;
            background: #fff7ed;
            border: 1px solid #fed7aa;
            font-size: 28px;
            box-shadow: 0 6px 16px rgba(249, 115, 22, 0.12);
        }

        .story-card h3 {
            margin-bottom: 12px;
            color: var(--navy);
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 20px;
            font-weight: 800;
        }

        .story-card p {
            margin-bottom: 0;
            color: var(--muted);
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 14px;
            line-height: 1.8;
        }

        .story-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            margin-bottom: 20px;
            border-radius: 15px;
            background: var(--green-light);
            font-size: 24px;
        }

        .story-card h3 {
            margin-bottom: 10px;
            color: var(--navy);
            font-size: 20px;
        }

        .story-card p {
            margin-bottom: 0;
            color: var(--muted);
            font-size: 14px;
            line-height: 1.9;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
        }

        .value-card {
            padding: 27px 23px;
            border: 1px solid #e0ece3;
            border-radius: 20px;
            background: #fff;
            transition: transform .2s ease, box-shadow .2s ease;
        }

        .value-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 14px 30px rgba(24,70,43,.08);
        }

        .value-card .icon {
            margin-bottom: 15px;
            font-size: 29px;
        }

        .value-card h3 {
            margin-bottom: 8px;
            color: var(--navy);
            font-size: 17px;
        }

        .value-card p {
            margin-bottom: 0;
            color: var(--muted);
            font-size: 13px;
            line-height: 1.8;
        }

        .cta {
            padding: 0 0 80px;
        }

        .cta-panel {
            padding: 54px 25px;
            border-radius: 28px;
            background: linear-gradient(125deg, #103f2c, #16845b);
            color: white;
            text-align: center;
        }

        .cta-panel h2 {
            max-width: 620px;
            margin: 0 auto 14px;
            font-size: clamp(27px, 4vw, 38px);
            line-height: 1.3;
        }

        .cta-panel p {
            max-width: 580px;
            margin: 0 auto 25px;
            color: #d8f3e1;
            font-size: 14px;
        }

        .cta-actions {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 12px;
        }

        .cta .btn-outline {
            border-color: rgba(255,255,255,.4);
            background: transparent;
            color: white;
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

        @media (max-width: 800px) {
            .nav-links {
                gap: 13px;
            }

            .nav-links a {
                font-size: 11px;
            }

            .nav-inner > .btn {
                padding: 10px 12px;
                font-size: 11px;
            }

            .hero-grid {
                gap: 30px;
            }

            .hero-image {
                height: 310px;
            }

            .values-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 620px) {
            .container {
                width: calc(100% - 32px);
            }

            .nav-inner {
                min-height: 68px;
                flex-wrap: wrap;
                padding: 10px 0;
            }

            .brand-name {
                font-size: 21px;
            }

            .nav-links {
                order: 3;
                width: 100%;
                justify-content: space-between;
                gap: 8px;
                padding: 8px 0;
                border-top: 1px solid var(--border);
            }

            .nav-links a {
                font-size: 10px;
            }

            .hero {
                padding: 55px 0;
            }

            .hero-grid {
                grid-template-columns: 1fr;
                gap: 35px;
            }

            .hero h1 {
                font-size: 40px;
            }

            .hero p {
                font-size: 14px;
            }

            .hero-image {
                height: 280px;
            }

            .section {
                padding: 62px 0;
            }

            .story-grid {
                grid-template-columns: 1fr;
            }

            .story-card {
                padding: 24px;
            }

            .cta {
                padding-bottom: 60px;
            }

            .cta-panel {
                padding: 40px 20px;
            }

        
        }

        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after {
                scroll-behavior: auto !important;
                transition-duration: .01ms !important;
            }
        }

    
/* =====================================
   DEKORASI HERO BERANDA VOLUNTRACK
===================================== */

/* Area hero sebagai tempat ornamen */
.hero,
.hero-section {
    position: relative;
    isolation: isolate;
    overflow: hidden;
}

/* Ornamen lingkaran hijau di belakang foto */
.hero::before,
.hero-section::before {
    content: "";
    position: absolute;
    width: 300px;
    height: 300px;
    top: 25px;
    right: 8%;
    border: 2px solid rgba(16, 185, 129, 0.20);
    border-radius: 50%;
    z-index: -1;
    pointer-events: none;
    animation: dekorasiMengambang 7s ease-in-out infinite;
}

/* Ornamen bintang oranye */
.hero::after,
.hero-section::after {
    content: "✦";
    position: absolute;
    top: 20%;
    left: 47%;
    color: #fb923c;
    font-size: 32px;
    opacity: 0.9;
    pointer-events: none;
    animation: bintangBerputar 6s ease-in-out infinite;
}

/* Animasi lingkaran */
@keyframes dekorasiMengambang {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-12px);
    }
}

/* Animasi bintang */
@keyframes bintangBerputar {
    0%, 100% {
        transform: rotate(0deg) scale(1);
    }
    50% {
        transform: rotate(18deg) scale(1.18);
    }
}

/* Foto hero */
.hero-image-wrap img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    border-radius: 22px;
    transition: transform 0.4s ease;
}

.hero-image-wrap img:hover {
    transform: scale(1.02);
}

@media (max-width: 768px) {
    .hero-grid {
        grid-template-columns: 1fr;
        gap: 32px;
    }

    .hero-image-wrap {
        height: 340px;
        margin-top: 0;
    }
}

/* Tombol lebih hidup saat diarahkan */
.btn-orange,
.btn-primary {
    transition: transform 0.25s ease, box-shadow 0.25s ease;
}

.btn-orange:hover,
.btn-primary:hover {
    transform: translateY(-3px);
    box-shadow: 0 12px 25px rgba(249, 115, 22, 0.22);
}

/* Hormati pengaturan pengguna yang mengurangi animasi */
@media (prefers-reduced-motion: reduce) {
    .hero::before,
    .hero-section::before,
    .hero::after,
    .hero-section::after {
        animation: none;
    }

    .hero-image-wrap img,
    .btn-orange,
    .btn-primary {
        transition: none;
    }
}


/* Memperbaiki posisi foto pada halaman Tentang */
.hero-grid {
    align-items: center;
}

.hero-image-wrap {
    align-self: center;
    margin-top: -35px;
}

.hero-image-wrap img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Menyesuaikan posisi pada layar kecil */
@media (max-width: 768px) {
    .hero-image-wrap {
        margin-top: 0;
    }
}


    </style>
</head>

<body>

    {{-- NAVBAR --}}
    <header class="navbar">
        <div class="container nav-inner">

            <a href="{{ url('/') }}" class="brand">
                <img
                    src="{{ asset('images/logo-icon.png') }}"
                    alt="Logo VolunTrack"
                    onerror="this.style.di splay='none'"
                >
                <span class="brand-name">Volun<span>Track</span></span>
            </a>

@include('partials.navbar')


        </div>
    </header>


    <main>

        {{-- HERO TENTANG --}}
        <section class="hero">
            <div class="container hero-grid">

                <div>
                    <span class="eyebrow">CERITA VOLUNTRACK</span>

                    <h1>
                        Menghubungkan <span>Kebaikan,</span>
                        Menciptakan Perubahan.
                    </h1>

                    <p>
                    VolunTrack adalah platform manajemen relawan modern yang didedikasikan untuk menghubungkan
organisasi sosial, lembaga kemanusiaan, serta ribuan relawan berjiwa penolong di seluruh penjuru Indonesia.
Buku panduan ini disusun sebagai acuan resmi bagi setiap pendaftar untuk memahami tata kelola, alur
partisipasi, serta standar operasional kegiatan sosial
                    </p>

                    <a href="{{ route('activities.index') }}" class="btn btn-orange">
                        Temukan Program Aksi →
                    </a>
                </div>

                <div class="hero-image-wrap">
                     <img
                            class="hero-image"
                            src='{{ asset('images/relawan.jpg') }}'
                            alt="Relawan bekerja sama dalam kegiatan sosial"
                            
                        >
                </div>

            </div>
        </section>


        {{-- CERITA KAMI --}}
        <section class="section">
            <div class="container">

                <div class="section-heading">
                    <span class="eyebrow">MENGENAL KAMI</span>
                    <h2>Berawal dari kepedulian, tumbuh menjadi kolaborasi</h2>
                    <p>
                        VolunTrack dirancang untuk membuat informasi kegiatan
                        relawan lebih mudah ditemukan dan dikelola.
                    </p>
                </div>

                <div class="story-grid">
    <article class="story-card story-card-orange">
        <div class="story-icon" aria-hidden="true">🌱</div>
        <h3>Siapa Kami?</h3>
        <p>
            VolunTrack adalah platform manajemen relawan yang membantu mempertemukan pengguna dengan informasi program sosial...
        </p>
    </article>

    <article class="story-card story-card-orange">
        <div class="story-icon" aria-hidden="true">💚</div>
        <h3>Mengapa VolunTrack Hadir?</h3>
        <p>
            Menemukan kegiatan yang sesuai dan memahami proses pendaftaran bisa menjadi tantangan...
        </p>
    </article>
</div>

                </div>
            </div>
        </section>


        {{-- VISI DAN MISI --}}
        <section class="section section-soft">
            <div class="container">

                <div class="section-heading">
                    <span class="eyebrow">ARAH DAN TUJUAN</span>
                    <h2>Visi dan Misi VolunTrack</h2>
                    <p>
                        Membangun pengalaman relawan yang lebih terhubung,
                        informatif, dan berdampak positif.
                    </p>
                </div>

            <div class="story-grid">
    <article class="story-card story-card-green">
        <div class="story-icon" aria-hidden="true">🔭</div>
        <h3>Visi</h3>
        <p>
            Menjadi platform yang memudahkan masyarakat menemukan kesempatan berkontribusi dalam kegiatan sosial...
        </p>
    </article>

    <article class="story-card story-card-green">
        <div class="story-icon" aria-hidden="true">🧭</div>
        <h3>Misi</h3>
        <p>
            Menyediakan informasi program yang terarah, membantu proses pengelolaan kegiatan relawan...
        </p>
    </article>
</div>

                </div>
            </div>
        </section>
                        
    </main>

     <!-- FOOTER -->
    <footer class="site-footer">
        <div class="footer-brand">
            Volun<span>Track</span>
        </div>

        <p>
            Bersama, kita ciptakan perubahan yang berarti.
        </p>

        <p>
            &copy; {{ date('Y') }} VolunTrack. Semua hak dilindungi.
        </p>
    </footer>

</body>
</html>