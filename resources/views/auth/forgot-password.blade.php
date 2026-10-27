<x-guest-layout>
    <div style="width: 100%; max-width: 440px; background-color: #ffffff; border-radius: 28px; box-shadow: 0 20px 40px -15px rgba(5, 150, 105, 0.15), 0 0 0 1px rgba(5, 150, 105, 0.08); overflow: hidden; margin: 24px;">
        
        <!-- Header Card dengan Latar Hijau Mint Serasi -->
        <div style="background-color: #f0fdf4; padding: 32px 24px 24px 24px; text-align: center;">
            
            <a href="{{ url('/') }}" style="display: inline-flex; align-items: center; gap: 10px; text-decoration: none; margin-bottom: 16px;">
                <img src="{{ asset('images/logo-icon.png') }}" alt="VolunTrack" style="height: 36px; width: auto;">
                <span style="font-size: 22px; font-weight: 800; color: #0f172a;">Volun<span style="color: #059669;">Track</span></span>
            </a>

            <div>
                <span style="display: inline-block; padding: 6px 16px; background-color: #d1fae5; color: #047857; font-size: 11px; font-weight: 800; border-radius: 9999px; letter-spacing: 0.05em; text-transform: uppercase; margin-bottom: 12px;">
                    RESET KATA SANDI
                </span>
            </div>

            <div style="width: 48px; height: 48px; background-color: #d1fae5; border-radius: 16px; display: flex; align-items: center; justify-content: center; margin: 0 auto 12px auto; font-size: 22px;">
                🔐
            </div>

            <h1 style="font-size: 24px; font-weight: 800; color: #0f172a; margin: 0 0 6px 0; letter-spacing: -0.02em;">Lupa Kata Sandi?</h1>
            <p style="font-size: 13px; color: #64748b; margin: 0; line-height: 1.5; font-weight: 500;">
                Tenang, kami siap membantu! Masukkan alamat email akunmu untuk menerima tautan atur ulang kata sandi.
            </p>
        </div>

        <!-- Body Form Forgot Password -->
        <div style="padding: 32px 28px;">
            
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}" style="display: flex; flex-direction: column; gap: 20px;">
                @csrf

                <!-- Email Input -->
                <div style="display: flex; flex-direction: column; gap: 6px;">
                    <label for="email" style="font-size: 13px; font-weight: 700; color: #334155;">Alamat Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus placeholder="nama@email.com" style="width: 100%; padding: 12px 16px; background-color: #ffffff; border: 1.5px solid #e2e8f0; border-radius: 14px; color: #0f172a; font-size: 14px; outline: none; box-sizing: border-box; transition: all 0.2s;" onfocus="this.style.borderColor='#059669'; this.style.boxShadow='0 0 0 3px rgba(5, 150, 105, 0.1)';" onblur="this.style.borderColor='#e2e8f0'; this.style.boxShadow='none';">
                    @error('email')
                        <p style="font-size: 12px; color: #dc2626; margin: 2px 0 0 0;">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Tombol Kirim Tautan Oranye -->
                <button type="submit" style="width: 100%; padding: 14px; background-color: #ea580c; color: #ffffff; font-size: 15px; font-weight: 800; border: none; border-radius: 14px; cursor: pointer; box-shadow: 0 10px 20px rgba(234, 88, 12, 0.25); display: flex; align-items: center; justify-content: center; gap: 8px; margin-top: 6px; transition: background-color 0.2s;" onmouseover="this.style.backgroundColor='#c2410c'" onmouseout="this.style.backgroundColor='#ea580c'">
                    <span>Kirim Tautan Reset</span>
                    <span style="font-size: 16px;">→</span>
                </button>

                <!-- Kembali ke Login -->
                <div style="text-align: center; margin-top: 4px;">
                    <a href="{{ route('login') }}" style="color: #059669; font-size: 13px; font-weight: 700; text-decoration: none;">
                        ← Kembali ke halaman Masuk
                    </a>
                </div>

            </form>
        </div>

        <!-- Footer Card -->
        <div style="padding: 16px; text-align: center; background-color: #f8fafc; border-top: 1px solid #f1f5f9;">
            <p style="font-size: 11px; color: #94a3b8; margin: 0;">
                © {{ date('Y') }} VolunTrack · Bergerak Bersama, Berdampak Nyata
            </p>
        </div>

    </div>
</x-guest-layout>