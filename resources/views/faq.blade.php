<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - VolunTrack</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --green: #059669;
            --green-dark: #047857;
            --green-light: #ecfdf5;
            --orange: #ea580c;
            --navy: #172554;
            --text: #334155;
            --muted: #64748b;
            --border: #e2e8f0;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: #f8fafc;
            color: var(--text);
        }

        a {
            text-decoration: none;
        }

        /* NAVBAR */
        .site-header {
            position: sticky;
            top: 0;
            z-index: 50;
            background: rgba(255, 255, 255, 0.96);
            border-bottom: 1px solid var(--border);
            box-shadow: 0 3px 15px rgba(15, 23, 42, 0.04);
            backdrop-filter: blur(12px);
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

        /* HERO SECTION */
        .hero {
            position: relative;
            isolation: isolate;
            overflow: hidden;
            padding: 70px 24px 75px;
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

        .heading-inner {
            max-width: 800px;
            margin: 0 auto;
        }

        .badge {
            display: inline-block;
            padding: 8px 17px;
            border-radius: 30px;
            background: #d1fae5;
            color: var(--green-dark);
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 1px;
        }

        .hero h1 {
            margin: 18px 0 12px;
            font-size: clamp(28px, 4vw, 42px);
            line-height: 1.25;
            font-weight: 800;
            color: var(--navy);
            letter-spacing: -1px;
        }

        .hero p {
            max-width: 620px;
            margin: 0 auto;
            color: var(--muted);
            font-size: 15px;
            line-height: 1.8;
        }

        .section-underline {
            width: 50px;
            height: 4px;
            background-color: var(--orange);
            border-radius: 2px;
            margin: 20px auto 0 auto;
        }

        /* MAIN CONTENT & FAQ LIST */
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 50px 24px 80px;
        }

        .faq-list {
            display: grid;
            gap: 16px;
        }

        .faq-item {
            background: white;
            border: 1px solid var(--border);
            border-radius: 18px;
            padding: 0 24px;
            box-shadow: 0 4px 14px rgba(15, 23, 42, 0.035);
            transition: border-color 0.2s, box-shadow 0.2s, transform 0.2s;
        }

        .faq-item:hover {
            transform: translateY(-2px);
        }

        .faq-item[open] {
            border-color: #6ee7b7;
            box-shadow: 0 6px 20px rgba(5, 150, 105, 0.09);
        }

        .faq-item summary {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            padding: 22px 0;
            cursor: pointer;
            list-style: none;
            font-size: 15px;
            line-height: 1.6;
            font-weight: 700;
            color: var(--navy);
        }

        .faq-item summary::-webkit-details-marker {
            display: none;
        }

        .faq-item summary::after {
            content: '+';
            flex-shrink: 0;
            color: var(--green);
            font-size: 24px;
            font-weight: 600;
        }

        .faq-item[open] summary::after {
            content: '−';
        }

        .faq-answer {
            padding: 0 0 22px;
            color: var(--muted);
            font-size: 14px;
            line-height: 1.8;
            border-top: 1px solid #f1f5f9;
            padding-top: 16px;
        }

        /* CALL CENTER SECTION */
        .call-center {
            margin-top: 60px;
            padding: 40px 28px;
            border-radius: 24px;
            background: linear-gradient(135deg, #064e3b, #059669);
            text-align: center;
            color: white;
            box-shadow: 0 15px 35px rgba(5, 150, 105, 0.17);
        }

        .wa-icon {
            width: 58px;
            height: 58px;
            margin: 0 auto 18px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.16);
            font-size: 28px;
        }

        .call-center h2 {
            margin: 0 0 12px;
            font-size: 26px;
            font-weight: 800;
        }

        .call-center p {
            max-width: 560px;
            margin: 0 auto 24px;
            color: #d1fae5;
            font-size: 14px;
            line-height: 1.8;
        }

        .wa-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            padding: 14px 24px;
            border-radius: 12px;
            background: var(--orange);
            color: white;
            font-size: 14px;
            font-weight: 800;
            transition: 0.2s ease;
            box-shadow: 0 4px 14px rgba(234, 88, 12, 0.3);
        }

        .wa-button:hover {
            background: #c2410c;
            transform: translateY(-2px);
        }

        .wa-number {
            display: block;
            margin-top: 16px;
            color: #d1fae5;
            font-size: 13px;
            font-weight: 600;
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

        @media (max-width: 650px) {
            .hero {
                padding: 55px 20px;
            }
            .container {
                padding: 35px 18px 60px;
            }
            .faq-item {
                padding: 0 18px;
            }
            .call-center {
                padding: 32px 20px;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <header class="site-header">
        <div class="navbar">
            <a href="{{ url('/') }}" class="brand">
                <img src="{{ asset('images/logo-icon.png') }}" alt="Logo VolunTrack" style="width: 44px; height: 44px;">
                <span class="brand-name">Volun<span>Track</span></span>
            </a>

            @include('partials.navbar')
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="heading-inner">
            <span class="badge">FAQ</span>
            <h1>Pertanyaan yang Sering Diajukan</h1>
            <p>
                Temukan jawaban atas pertanyaan seputar pendaftaran, program relawan, dan kegiatan sosial di VolunTrack.
            </p>
            <div class="section-underline"></div>
        </div>
    </section>

    <!-- MAIN CONTENT -->
    <main class="container">

        <!-- 10 PERTANYAAN FAQ -->
        <section class="faq-list">

            <details class="faq-item">
                <summary>Bagaimana cara bergabung menjadi relawan?</summary>
                <div class="faq-answer">
                    Kamu dapat membuka menu Jalur Pendaftaran, memilih jalur yang sesuai, lalu mengisi formulir pendaftaran program relawan yang tersedia.
                </div>
            </details>

            <details class="faq-item">
                <summary>Apakah ada biaya pendaftaran?</summary>
                <div class="faq-answer">
                    Pendaftaran program aksi sosial dasar di VolunTrack tidak dipungut biaya. Jika ada program khusus dengan ketentuan berbeda, informasi resminya akan dicantumkan pada detail program.
                </div>
            </details>

            <details class="faq-item">
                <summary>Siapa saja yang boleh mendaftar?</summary>
                <div class="faq-answer">
                    Siapa pun yang memenuhi persyaratan program dapat mendaftar. Periksa ketentuan usia dan persyaratan lainnya pada informasi masing-masing kegiatan.
                </div>
            </details>

            <details class="faq-item">
                <summary>Bagaimana cara memilih program relawan?</summary>
                <div class="faq-answer">
                    Buka halaman Program Aksi, baca deskripsi kegiatan, lokasi, jadwal, dan persyaratannya. Pilih kegiatan yang sesuai dengan minat serta kemampuanmu.
                </div>
            </details>

            <details class="faq-item">
                <summary>Apakah saya boleh mengikuti lebih dari satu program?</summary>
                <div class="faq-answer">
                    Kamu dapat melihat dan mempertimbangkan beberapa program. Pastikan jadwalnya tidak bertabrakan dan ikuti ketentuan pendaftaran yang berlaku untuk setiap program.
                </div>
            </details>

            <details class="faq-item">
                <summary>Apakah pemula boleh menjadi relawan?</summary>
                <div class="faq-answer">
                    Tentu! Pemula dapat mengikuti program yang tidak mensyaratkan pengalaman sebelumnya. Pilih kegiatan yang sesuai dan ikuti arahan koordinator relawan.
                </div>
            </details>

            <details class="faq-item">
                <summary>Bagaimana cara mengetahui status pendaftaran?</summary>
                <div class="faq-answer">
                    Periksa informasi dan pemberitahuan dari penyelenggara melalui kontak yang kamu cantumkan saat mendaftar. Jika membutuhkan bantuan, hubungi Call Center VolunTrack.
                </div>
            </details>

            <details class="faq-item">
                <summary>Apa yang harus disiapkan sebelum mengikuti kegiatan?</summary>
                <div class="faq-answer">
                    Baca panduan kegiatan, perhatikan jadwal dan lokasi, siapkan perlengkapan yang diminta, serta ikuti instruksi dari koordinator program.
                </div>
            </details>

            <details class="faq-item">
                <summary>Apakah relawan mendapatkan sertifikat?</summary>
                <div class="faq-answer">
                    Sertifikat bergantung pada kebijakan masing-masing penyelenggara program. Periksa informasi kegiatan atau tanyakan kepada koordinator sebelum mendaftar.
                </div>
            </details>

            <details class="faq-item">
                <summary>Bagaimana jika saya mengalami kendala saat mendaftar?</summary>
                <div class="faq-answer">
                    Periksa kembali data yang diisi dan pastikan semua kolom wajib sudah lengkap. Jika kendala masih terjadi, hubungi Call Center melalui WhatsApp pada bagian bawah halaman ini.
                </div>
            </divfaq-answer>
            </details>

        </section>

        <!-- CALL CENTER WHATSAPP -->
        <section class="call-center">
            <div class="wa-icon">☏</div>

            <h2>Masih Butuh Bantuan?</h2>

            <p>
                Tim VolunTrack siap membantu menjawab pertanyaanmu seputar pendaftaran dan program relawan. Hubungi kami langsung melalui WhatsApp.
            </p>

            <a
                href="https://wa.me/6285139309779?text=Halo%20Tim%20VolunTrack%2C%20saya%20ingin%20bertanya%20tentang%20program%20relawan."
                class="wa-button"
                target="_blank"
                rel="noopener noreferrer"
            >
                💬 Hubungi Call Center via WhatsApp
            </a>

            <span class="wa-number">
                WhatsApp: 0851-3930-9779
            </span>
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