<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Formulir Pendaftaran - VolunTrack</title>

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
            -webkit-tap-highlight-color: transparent;
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
            gap: 20px;
        }

        .brand {
            display: inline-flex;
            align-items: center;
            gap: 11px;
            text-decoration: none;
        }

        .brand img {
            width: 44px;
            height: 44px;
            object-fit: contain;
        }

        .brand-name {
            color: var(--navy);
            font-size: 23px;
            font-weight: 800;
            letter-spacing: -1px;
            white-space: nowrap;
        }

        .brand-name span {
            color: var(--green);
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            padding: 11px 16px;
            color: var(--green-dark);
            background: var(--green-light);
            border: 1px solid #d1fae5;
            border-radius: 12px;
            font-size: 13px;
            font-weight: 800;
            text-decoration: none;
            transition: 0.2s ease;
        }

        .back-link:hover {
            background: #d1fae5;
            transform: translateX(-2px);
        }

        /* HERO */
        .hero {
            padding: 54px 20px 34px;
            text-align: center;
            background:
                radial-gradient(ellipse at 15% 20%, rgba(16, 185, 129, 0.10), transparent 40%),
                radial-gradient(ellipse at 85% 80%, rgba(249, 115, 22, 0.08), transparent 35%),
                linear-gradient(180deg, #ffffff 0%, #f0fdf4 100%);
        }

        .hero-inner {
            max-width: 760px;
            margin: 0 auto;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 15px;
            margin-bottom: 18px;
            color: var(--green-dark);
            background: #dcfce7;
            border: 1px solid #bbf7d0;
            border-radius: 999px;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 0.8px;
        }

        .eyebrow-dot {
            width: 7px;
            height: 7px;
            background: var(--green);
            border-radius: 50%;
        }

        .hero h1 {
            margin: 0 0 14px;
            color: var(--navy);
            font-size: clamp(27px, 4vw, 39px);
            font-weight: 800;
            line-height: 1.25;
            letter-spacing: -1.2px;
        }

        .hero h1 span {
            color: var(--green);
        }

        .hero p {
            max-width: 650px;
            margin: 0 auto;
            color: var(--muted);
            font-size: 14px;
            line-height: 1.9;
        }

        /* FORM WRAPPER */
        .main-content {
            max-width: 900px;
            margin: 0 auto;
            padding: 28px 24px 80px;
        }

        .form-card {
            overflow: hidden;
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 26px;
            box-shadow: 0 14px 40px rgba(15, 23, 42, 0.06);
        }

        .form-card-header {
            padding: 28px 40px;
            background: linear-gradient(135deg, #ecfdf5 0%, #ffffff 100%);
            border-bottom: 1px solid #e5f5eb;
        }

        .form-card-header h2 {
            margin: 0 0 8px;
            color: var(--navy);
            font-size: 21px;
            font-weight: 800;
        }

        .form-card-header p {
            margin: 0;
            color: var(--muted);
            font-size: 13px;
            line-height: 1.8;
        }

        .form-body {
            padding: 34px 40px 40px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px 22px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 9px;
        }

        .form-group.full-width {
            grid-column: 1 / -1;
        }

        .form-group label {
            color: #334155;
            font-size: 13px;
            font-weight: 800;
        }

        .required {
            color: #ea580c;
        }

        .form-control {
            display: block;
            width: 100%;
            min-height: 49px;
            padding: 13px 15px;
            color: #1e293b;
            background: #ffffff;
            border: 1.5px solid #dbe3ed;
            border-radius: 12px;
            font-family: inherit;
            font-size: 13px;
            outline: none;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        .form-control::placeholder {
            color: #94a3b8;
        }

        .form-control:focus {
            border-color: var(--green);
            box-shadow: 0 0 0 4px rgba(5, 150, 105, 0.10);
        }

        select.form-control {
            cursor: pointer;
        }

        .field-hint {
            margin: 0;
            color: #94a3b8;
            font-size: 11px;
            line-height: 1.7;
        }

        .form-notice {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            margin-top: 28px;
            padding: 16px;
            color: #475569;
            background: #f0fdf4;
            border: 1px solid #dcfce7;
            border-radius: 14px;
            font-size: 12px;
            line-height: 1.8;
        }

        .notice-icon {
            flex-shrink: 0;
            font-size: 18px;
        }

        .form-actions {
            margin-top: 28px;
        }

        .submit-button {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            width: 100%;
            min-height: 54px;
            padding: 15px 22px;
            color: #ffffff;
            background: var(--orange);
            border: none;
            border-radius: 13px;
            box-shadow: 0 7px 18px rgba(249, 115, 22, 0.20);
            font-family: inherit;
            font-size: 14px;
            font-weight: 800;
            cursor: pointer;
            transition: background 0.2s, transform 0.2s, box-shadow 0.2s;
        }

        .submit-button:hover {
            background: #ea580c;
            box-shadow: 0 10px 22px rgba(249, 115, 22, 0.25);
            transform: translateY(-1px);
        }

        .submit-button:focus-visible,
        .back-link:focus-visible {
            outline: 3px solid #fdba74;
            outline-offset: 3px;
        }

        /* FOOTER */
        .footer {
            padding: 25px 20px;
            color: #d1fae5;
            background: #064e3b;
            text-align: center;
            font-size: 12px;
            line-height: 1.9;
        }

        .footer strong {
            color: #ffffff;
        }

        /* RESPONSIVE */
        @media (max-width: 640px) {
            .nav-container {
                padding: 13px 16px;
                flex-wrap: wrap;
                justify-content: center;
            }

            .brand img {
                width: 38px;
                height: 38px;
            }

            .brand-name {
                font-size: 21px;
            }

            .back-link {
                font-size: 11px;
                padding: 10px 12px;
            }

            .hero {
                padding: 42px 18px 30px;
            }

            .hero p {
                font-size: 12px;
            }

            .main-content {
                padding: 20px 14px 55px;
            }

            .form-card {
                border-radius: 20px;
            }

            .form-card-header {
                padding: 24px 21px;
            }

            .form-card-header h2 {
                font-size: 19px;
            }

            .form-body {
                padding: 25px 20px 28px;
            }

            .form-grid {
                grid-template-columns: 1fr;
                gap: 21px;
            }

            .form-group.full-width {
                grid-column: auto;
            }

            .form-control {
                font-size: 13px;
            }

            .submit-button {
                font-size: 13px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                scroll-behavior: auto !important;
                transition-duration: 0.01ms !important;
            }
        }
    </style>

    <!-- SweetAlert2 CSS & JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
    /* Styling khusus agar SweetAlert2 tampil sesuai tema VolunTrack */
    .swal2-popup {
        border-radius: 24px !important;
        font-family: 'Plus Jakarta Sans', sans-serif !important;
        padding: 32px !important;
        background: #ffffff !important;
        box-shadow: 0 25px 50px -12px rgba(5, 150, 105, 0.25) !important;
    }
    .swal2-title {
        font-size: 22px !important;
        font-weight: 800 !important;
        color: #0f172a !important;
    }
    .swal2-html-container {
        font-size: 14px !important;
        color: #475569 !important;
        line-height: 1.6 !important;
    }
    .swal2-confirm {
        background-color: #059669 !important;
        border-radius: 12px !important;
        padding: 12px 28px !important;
        font-weight: 700 !important;
        font-size: 14px !important;
        box-shadow: 0 4px 14px rgba(5, 150, 105, 0.4) !important;
    }
    .swal2-cancel {
        background-color: #f1f5f9 !important;
        color: #475569 !important;
        border-radius: 12px !important;
        padding: 12px 24px !important;
        font-weight: 700 !important;
        font-size: 14px !important;
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

            <a href="{{ url('/jalur-daftar') }}" class="back-link">
                <span aria-hidden="true">←</span>
                Kembali ke Pilihan Jalur
            </a>

        </div>
    </header>

    <!-- HERO -->
    <section class="hero">
        <div class="hero-inner">

            <div class="eyebrow">
                <span class="eyebrow-dot"></span>
                FORMULIR PENDAFTARAN
            </div>

            <h1>
                Mulai Langkah Baikmu <span>Bersama VolunTrack</span>
            </h1>

        </div>
    </section>

    <!-- FORM PENDAFTARAN -->
    <main class="main-content">

        <section class="form-card">

            <div class="form-card-header">
                <h2>Pendaftaran Program Ekspedisi Relawan</h2>
                <p>Isi setiap kolom yang bertanda <span class="required">*</span> sebelum mengirim formulir.</p>
            </div>

            <div class="form-body">

                <form action="#" method="POST">
                    @csrf

                    <div class="form-grid">

                        <!-- JALUR PENDAFTARAN -->
                        <div class="form-group full-width">
                            <label for="jalur">
                                Jalur Pendaftaran Dipilih <span class="required">*</span>
                            </label>

                            <select
                                class="form-control"
                                id="jalur"
                                name="jalur"
                                required
                            >
                                <option value="partially_funded" selected>
                                    ✨ Jalur Subsidi (Partially Funded)
                                </option>
                                <option value="fully_funded">
                                    🌟 Jalur Seleksi Nasional (Fully Funded)
                                </option>
                                <option value="kemitraan">
                                    🤝 Jalur Kemitraan &amp; CSR
                                </option>
                                <option value="ambassador">
                                    👑 Jalur Duta Relawan (Ambassador)
                                </option>
                            </select>
                        </div>

                        <!-- NAMA LENGKAP -->
                        <div class="form-group">
                            <label for="nama">
                                Nama Lengkap (Sesuai KTP) <span class="required">*</span>
                            </label>

                            <input
                                class="form-control"
                                type="text"
                                id="nama"
                                name="nama"
                                placeholder="Contoh: Budi Santoso"
                                autocomplete="name"
                                maxlength="255"
                                required
                            >
                        </div>

                        <!-- NOMOR WHATSAPP -->
                        <div class="form-group">
                            <label for="whatsapp">
                                Nomor WhatsApp / HP <span class="required">*</span>
                            </label>

                            <input
                                class="form-control"
                                type="tel"
                                id="whatsapp"
                                name="whatsapp"
                                placeholder="Contoh: 081234567890"
                                autocomplete="tel"
                                maxlength="20"
                                required
                            >

                            <p class="field-hint">
                                Gunakan nomor yang aktif dan bisa dihubungi.
                            </p>
                        </div>

                        <!-- EMAIL -->
                        <div class="form-group full-width">
                            <label for="email">
                                Email Aktif <span class="required">*</span>
                            </label>

                            <input
                                class="form-control"
                                type="email"
                                id="email"
                                name="email"
                                placeholder="Contoh: budi@email.com"
                                autocomplete="email"
                                maxlength="255"
                                required
                            >

                            <p class="field-hint">
                                Pastikan alamat email ditulis dengan benar.
                            </p>
                        </div>

                    </div>

                    <!-- INFORMASI -->
                    <div class="form-notice">
                        <span class="notice-icon" aria-hidden="true">💚</span>
                        <div>
                            <strong>Periksa kembali data kamu.</strong>
                            Pastikan nama, nomor WhatsApp, email, dan jalur
                            pendaftaran sudah benar sebelum melanjutkan.
                        </div>
                    </div>

                    <!-- TOMBOL KIRIM -->
                    <div class="form-actions">
                        <button type="submit" class="submit-button">
                            Kirim Formulir Pendaftaran
                            <span aria-hidden="true">🚀</span>
                        </button>
                    </div>

                </form>

            </div>
        </section>

    </main>

    <!-- FOOTER -->
    <footer class="footer">
        <strong>VolunTrack</strong> — Bersama Menebar Kebaikan, Bersama Membawa Perubahan.
        <br>
        <span>&copy; {{ date('Y') }} VolunTrack. Semua hak dilindungi.</span>
    </footer>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.querySelector('form');

        if (form) {
            form.addEventListener('submit', function (e) {
                e.preventDefault(); // Menahan submit langsung agar pop-up muncul dulu

                Swal.fire({
                    title: 'Pendaftaran Berhasil! 🎉',
                    text: 'Terima kasih telah mendaftar. Data diri dan pilihan jalur program kamu telah berhasil terkirim ke sistem VolunTrack.',
                    icon: 'success',
                    iconColor: '#059669',
                    showCancelButton: true,
                    confirmButtonText: '📊 Ke Dashboard',
                    cancelButtonText: '📝 Lihat Status',
                    confirmButtonColor: '#059669',
                    cancelButtonColor: '#64748b',
                    reverseButtons: true,
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "{{ url('/dashboard') }}";
                    } else {
                        window.location.href = "{{ url('/status-pendaftaran') }}";
                    }
                });
            });
        }
    });
</script>

</body>
</html>