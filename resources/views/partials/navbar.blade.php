@php
    $menu = [
        ['label' => 'Beranda', 'url' => url('/'), 'active' => request()->is('/')],
        ['label' => 'Program Aksi', 'url' => route('activities.index'), 'active' => request()->is('program-aksi*')],
        ['label' => 'Tentang', 'url' => url('/tentang'), 'active' => request()->is('tentang*')],
        ['label' => 'Jalur Daftar', 'url' => url('/jalur-daftar'), 'active' => request()->is('jalur-daftar*')],
        ['label' => 'FAQ', 'url' => route('faq'), 'active' => request()->is('faq*')],
        ['label' => 'Panduan', 'url' => asset('buku-panduan.pdf'), 'active' => false, 'external' => true],
    ];
@endphp


<style>
    .vt-navbar,
    .vt-navbar * {
        box-sizing: border-box;
    }

.vt-navbar {
    position: relative;
    z-index: 100;
    width: 100%;
    min-height: 78px;
    padding: 14px 3%;
    display: grid;
    grid-template-columns: 1fr auto auto;
    align-items: center;
    gap: 32px;
    background: #ffffff;
    border-bottom: 1px solid #e2e8f0;
    font-family: 'Plus Jakarta Sans', sans-serif;
}

.nav-btn-dashboard {
    background-color: #046a38; /* Warna hijau khas VolunTrack */
    color: #ffffff !important;
    padding: 8px 18px;
    border-radius: 10px;
    font-weight: 700;
    transition: all 0.2s ease;
    box-shadow: 0 4px 12px rgba(4, 106, 56, 0.2);
}

/* Standar ukuran dan ketebalan menu navbar agar konsisten */
.nav-links a {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 13px; /* Ukuran seragam */
    font-weight: 600; /* Ketebalan sedang yang rapi (jangan terlalu tebal agar tidak terlihat besar) */
    color: #58675e;
    text-decoration: none;
    transition: color 0.2s ease;
}

/* Saat menu sedang aktif (halaman yang sedang dibuka) */
.nav-links a.active,
.nav-links a:hover {
    color: #046a38; /* Warna hijau VolunTrack */
    font-weight: 700;
}

.nav-btn-dashboard:hover {
    background-color: #03532c;
    transform: translateY(-2px);
    box-shadow: 0 6px 16px rgba(4, 106, 56, 0.3);
}

.vt-menu {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 28px;
    margin-left: 35px;
}

.vt-actions {
    justify-self: end;
    display: flex;
    align-items: center;
    gap: 20px;
}

    .vt-brand {
        justify-self: start;
        white-space: nowrap;
        text-decoration: none;
        color: #064e3b;
        font-size: 25px;
        font-weight: 800;
        letter-spacing: -1px;
    }

    .vt-brand span {
        color: #059669;
    }

    .vt-menu {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 28px;
    }

    .vt-menu a {
        position: relative;
        padding: 10px 0;
        white-space: nowrap;
        text-decoration: none;
        color: #475569;
        font-size: 13px;
        font-weight: 700;
        transition: color .2s;
    }

    .vt-menu a:hover,
    .vt-menu a.active {
        color: #059669;
    }

    .vt-menu a.active::after {
        content: '';
        position: absolute;
        bottom: 2px;
        left: 0;
        width: 100%;
        height: 2px;
        border-radius: 10px;
        background: #059669;
    }

    .vt-actions {
        justify-self: end;
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .vt-login,
    .vt-register {
        white-space: nowrap;
        text-decoration: none;
        font-size: 13px;
        font-weight: 800;
    }

    .vt-login {
        color: #475569;
    }

    .vt-login:hover {
        color: #059669;
    }

    .vt-register {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 13px 21px;
        border-radius: 12px;
        background: #f97316;
        color: white;
        box-shadow: 0 5px 12px rgba(249, 115, 22, .15);
        transition: background .2s, transform .2s;
    }

    .vt-register:hover {
        background: #ea580c;
        transform: translateY(-1px);
    }

    @media (max-width: 1050px) {
        .vt-navbar {
            grid-template-columns: auto 1fr;
            gap: 12px 20px;
            padding: 14px 4%;
        }

        .vt-menu {
            grid-column: 1 / -1;
            grid-row: 2;
            justify-content: center;
            flex-wrap: wrap;
            gap: 8px 24px;
        }

        .vt-actions {
            grid-column: 2;
            grid-row: 1;
        }
    }

    @media (max-width: 520px) {
        .vt-navbar {
            padding: 14px 16px;
            gap: 10px;
        }

        .vt-brand {
            font-size: 22px;
        }

        .vt-actions {
            gap: 12px;
        }

        .vt-login,
        .vt-register {
            font-size: 12px;
        }

        .vt-register {
            padding: 11px 13px;
        }

        .vt-menu {
            gap: 5px 17px;
        }

        .vt-menu a {
            font-size: 12px;
        }
    }


</style>

<header class="vt-navbar">

    <nav class="vt-menu" aria-label="Navigasi utama">
       
@foreach ($menu as $item)
    <a
        href="{{ $item['url'] }}"
        class="{{ $item['active'] ? 'active' : '' }}"
        @if ($item['active']) aria-current="page" @endif
        @if (!empty($item['external']))
            target="_blank"
            rel="noopener noreferrer"
        @endif
    >
        {{ $item['label'] }}
    </a>
@endforeach

    </nav>

    <div class="vt-actions">
        @auth
            <a href="{{ url('/dashboard') }}" class="nav-btn-dashboard">Dashboard</a>

        @else
            <a href="{{ route('login') }}" class="vt-login">
                Masuk
            </a>

            <a href="{{ route('register') }}" class="vt-register">
                Daftar ↗
            </a>
        @endauth
    </div>
</header>