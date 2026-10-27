<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'VolunTrack') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=plus-jakarta-sans:400,500,600,700,800&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        :root {
            --green: #046a38;
            --orange: #ea580c;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Plus Jakarta Sans', sans-serif;
            position: relative;
            isolation: isolate;
            overflow-x: hidden;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: 
                radial-gradient(circle at 88% 12%, rgba(4, 106, 56, 0.12), transparent 40%),
                radial-gradient(circle at 12% 88%, rgba(234, 88, 12, 0.08), transparent 40%),
                linear-gradient(180deg, #ffffff 0%, #f4faf6 100%);
            padding: 24px 16px;
        }

        /* Lingkaran hijau transparan di kanan atas */
        body::before {
            content: "";
            position: absolute;
            width: 320px;
            height: 320px;
            top: -40px;
            right: 5%;
            border: 2px solid rgba(4, 106, 56, 0.18);
            border-radius: 50%;
            z-index: -1;
            pointer-events: none;
            animation: floatingDecor 7s ease-in-out infinite;
        }

        /* Bintang oranye di kiri tengah */
        body::after {
            content: "✦";
            position: absolute;
            top: 20%;
            left: 8%;
            color: #fb923c;
            font-size: 32px;
            opacity: 0.85;
            pointer-events: none;
            animation: rotateStar 6s ease-in-out infinite;
        }

        /* Animasi dekorasi */
        @keyframes floatingDecor {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-12px); }
        }

        @keyframes rotateStar {
            0%, 100% { transform: rotate(0deg) scale(1); }
            50% { transform: rotate(18deg) scale(1.15); }
        }

        @media (prefers-reduced-motion: reduce) {
            body::before, body::after {
                animation: none;
            }
        }
    </style>
</head>
<body>

    {{ $slot }}

</body>
</html>