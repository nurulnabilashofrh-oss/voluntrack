<x-guest-layout>
    <div style="width: 100%; max-width: 460px; background-color: #ffffff; border-radius: 28px; box-shadow: 0 20px 40px -15px rgba(5, 150, 105, 0.15), 0 0 0 1px rgba(5, 150, 105, 0.08); overflow: hidden; margin: 24px;">
        
        <!-- Header Card -->
        <div style="background-color: #f0fdf4; padding: 32px 24px 24px 24px; text-align: center;">
            
            <a href="{{ url('/') }}" style="display: inline-flex; align-items: center; gap: 10px; text-decoration: none; margin-bottom: 16px;">
                <img src="{{ asset('images/logo-icon.png') }}" alt="VolunTrack" style="height: 36px; width: auto;">
                <span style="font-size: 22px; font-weight: 800; color: #0f172a;">Volun<span style="color: #059669;">Track</span></span>
            </a>

            <div>
                <span style="display: inline-block; padding: 6px 16px; background-color: #d1fae5; color: #047857; font-size: 11px; font-weight: 800; border-radius: 9999px; letter-spacing: 0.05em; text-transform: uppercase; margin-bottom: 12px;">
                    GABUNG SEBAGAI RELAWAN
                </span>
            </div>

            <h1 style="font-size: 24px; font-weight: 800; color: #0f172a; margin: 0 0 6px 0; letter-spacing: -0.02em;">Buat Akun VolunTrack</h1>
            <p style="font-size: 13px; color: #64748b; margin: 0; line-height: 1.5; font-weight: 500;">
                Mulai perjalanan sosialmu dan jangkau masyarakat yang membutuhkan.
            </p>
        </div>

        <!-- Body Form Register -->
        <div style="padding: 32px 28px;">
            <form method="POST" action="{{ route('register') }}" style="display: flex; flex-direction: column; gap: 16px;">
                @csrf

                <!-- Nama Lengkap -->
                <div style="display: flex; flex-direction: column; gap: 6px;">
                    <label for="name" style="font-size: 13px; font-weight: 700; color: #334155;">Nama Lengkap</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" placeholder="cth. Budi Santoso" style="width: 100%; padding: 12px 16px; background-color: #ffffff; border: 1.5px solid #e2e8f0; border-radius: 14px; color: #0f172a; font-size: 14px; outline: none; box-sizing: border-box; transition: all 0.2s;" onfocus="this.style.borderColor='#059669'; this.style.boxShadow='0 0 0 3px rgba(5, 150, 105, 0.1)';" onblur="this.style.borderColor='#e2e8f0'; this.style.boxShadow='none';">
                    @error('name')
                        <p style="font-size: 12px; color: #dc2626; margin: 2px 0 0 0;">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email -->
                <div style="display: flex; flex-direction: column; gap: 6px;">
                    <label for="email" style="font-size: 13px; font-weight: 700; color: #334155;">Alamat Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" placeholder="nama@email.com" style="width: 100%; padding: 12px 16px; background-color: #ffffff; border: 1.5px solid #e2e8f0; border-radius: 14px; color: #0f172a; font-size: 14px; outline: none; box-sizing: border-box; transition: all 0.2s;" onfocus="this.style.borderColor='#059669'; this.style.boxShadow='0 0 0 3px rgba(5, 150, 105, 0.1)';" onblur="this.style.borderColor='#e2e8f0'; this.style.boxShadow='none';">
                    @error('email')
                        <p style="font-size: 12px; color: #dc2626; margin: 2px 0 0 0;">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div style="display: flex; flex-direction: column; gap: 6px;">
                    <label for="password" style="font-size: 13px; font-weight: 700; color: #334155;">Kata Sandi</label>
                    <input id="password" type="password" name="password" required autocomplete="new-password" placeholder="Minimal 8 karakter" style="width: 100%; padding: 12px 16px; background-color: #ffffff; border: 1.5px solid #e2e8f0; border-radius: 14px; color: #0f172a; font-size: 14px; outline: none; box-sizing: border-box; transition: all 0.2s;" onfocus="this.style.borderColor='#059669'; this.style.boxShadow='0 0 0 3px rgba(5, 150, 105, 0.1)';" onblur="this.style.borderColor='#e2e8f0'; this.style.boxShadow='none';">
                    @error('password')
                        <p style="font-size: 12px; color: #dc2626; margin: 2px 0 0 0;">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Konfirmasi Password -->
                <div style="display: flex; flex-direction: column; gap: 6px;">
                    <label for="password_confirmation" style="font-size: 13px; font-weight: 700; color: #334155;">Konfirmasi Kata Sandi</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Ulangi kata sandi" style="width: 100%; padding: 12px 16px; background-color: #ffffff; border: 1.5px solid #e2e8f0; border-radius: 14px; color: #0f172a; font-size: 14px; outline: none; box-sizing: border-box; transition: all 0.2s;" onfocus="this.style.borderColor='#059669'; this.style.boxShadow='0 0 0 3px rgba(5, 150, 105, 0.1)';" onblur="this.style.borderColor='#e2e8f0'; this.style.boxShadow='none';">
                </div>

                <!-- Tombol Daftar Oranye -->
                <button type="submit" style="width: 100%; padding: 14px; background-color: #ea580c; color: #ffffff; font-size: 15px; font-weight: 800; border: none; border-radius: 14px; cursor: pointer; box-shadow: 0 10px 20px rgba(234, 88, 12, 0.25); display: flex; align-items: center; justify-content: center; gap: 8px; margin-top: 8px; transition: background-color 0.2s;" onmouseover="this.style.backgroundColor='#c2410c'" onmouseout="this.style.backgroundColor='#ea580c'">
                    <span>Daftar Akun Relawan</span>
                    <span style="font-size: 16px;">🚀</span>
                </button>

                <!-- Link Login -->
                <div style="text-align: center; margin-top: 4px;">
                    <p style="font-size: 13px; color: #64748b; margin: 0;">
                        Sudah punya akun? 
                        <a href="{{ route('login') }}" style="color: #059669; font-weight: 700; text-decoration: none;">Masuk sekarang</a>
                    </p>
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