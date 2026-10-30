<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#0f3d7a">
    <title>{{ $title ?? 'Masuk ke SIMLAB' }}</title>
    <link rel="icon" type="image/png" href="{{ asset('image/logousu.png') }}">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-slate-50 font-sans text-slate-900">
    <main class="grid min-h-screen lg:grid-cols-2">
        <section class="relative hidden overflow-hidden bg-slate-950 px-12 py-14 lg:flex lg:flex-col">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,_rgba(37,99,235,0.42),_transparent_42%),radial-gradient(circle_at_85%_80%,_rgba(14,165,233,0.2),_transparent_36%)]"></div>
            <div class="relative flex items-center gap-3 text-white">
                <img src="{{ asset('image/logousu.png') }}" alt="Logo Universitas Sumatera Utara" class="size-12 rounded-xl bg-white p-1.5 object-contain">
                <div>
                    <p class="text-sm font-semibold tracking-wide">LABORATORIUM TERPADU</p>
                    <p class="text-xs text-slate-300">Fakultas Kedokteran USU</p>
                </div>
            </div>

            <div class="relative my-auto max-w-lg">
                <span class="inline-flex rounded-full border border-blue-300/30 bg-blue-400/10 px-3 py-1 text-sm font-medium text-blue-200">SIMLAB</span>
                <h1 class="mt-6 text-5xl font-semibold leading-tight tracking-tight text-white">Kelola layanan laboratorium dengan lebih mudah.</h1>
                <p class="mt-6 max-w-md text-lg leading-8 text-slate-300">Satu ruang kerja untuk memantau informasi dan layanan Laboratorium Terpadu FK USU.</p>
            </div>

            <p class="relative text-sm text-slate-400">© {{ now()->year }} Laboratorium Terpadu FK USU</p>
        </section>

        <section class="flex items-center justify-center px-5 py-10 sm:px-8">
            <div class="w-full max-w-md" x-data="{ showPassword: false, submitting: false }">
                <a href="{{ url('/') }}" class="inline-flex items-center gap-2 text-sm font-medium text-slate-500 transition hover:text-blue-700">
                    <svg class="size-4" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="m11.75 15-5-5 5-5" stroke-linecap="round" stroke-linejoin="round" /></svg>
                    Kembali ke beranda
                </a>

                <div class="mt-10 sm:mt-14">
                    <div class="flex items-center gap-3 lg:hidden">
                        <img src="{{ asset('image/logousu.png') }}" alt="Logo Universitas Sumatera Utara" class="size-11 rounded-xl border border-slate-200 p-1 object-contain">
                        <span class="text-sm font-semibold text-slate-700">Laboratorium Terpadu FK USU</span>
                    </div>

                    <h2 class="mt-7 text-3xl font-bold tracking-tight text-slate-900">Selamat datang kembali</h2>
                    <p class="mt-2 text-slate-600">Masuk untuk melanjutkan ke SIMLAB.</p>
                </div>

                @if (session('google_notice'))
                    <div class="mt-6 rounded-xl border border-amber-200 bg-amber-50 px-4 py-3 text-sm leading-6 text-amber-800" role="status">
                        {{ session('google_notice') }}
                    </div>
                @endif

                <a href="{{ route('login.google') }}" class="mt-8 flex w-full items-center justify-center gap-3 rounded-xl border border-slate-300 bg-white px-4 py-3 text-sm font-semibold text-slate-700 shadow-sm transition hover:border-slate-400 hover:bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2">
                    <svg class="size-5" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill="#4285F4" d="M21.35 12.27c0-.79-.07-1.55-.21-2.27H12v4.3h5.23a4.47 4.47 0 0 1-1.94 2.93v2.79h3.14c1.84-1.69 2.92-4.19 2.92-7.75Z" />
                        <path fill="#34A853" d="M12 21.75c2.62 0 4.82-.87 6.43-2.36l-3.14-2.43c-.87.58-1.99.92-3.29.92-2.53 0-4.67-1.7-5.44-3.99H3.31v2.88A9.72 9.72 0 0 0 12 21.75Z" />
                        <path fill="#FBBC05" d="M6.56 13.89A5.85 5.85 0 0 1 6.25 12c0-.66.11-1.3.31-1.89V7.23H3.31A9.74 9.74 0 0 0 2.25 12c0 1.72.41 3.35 1.06 4.77l3.25-2.88Z" />
                        <path fill="#EA4335" d="M12 6.12c1.43 0 2.71.49 3.72 1.45l2.79-2.79C16.81 3.19 14.62 2.25 12 2.25a9.72 9.72 0 0 0-8.69 4.98l3.25 2.88c.77-2.29 2.91-3.99 5.44-3.99Z" />
                    </svg>
                    Lanjutkan dengan Google
                </a>

                <div class="my-7 flex items-center gap-4" aria-hidden="true">
                    <div class="h-px flex-1 bg-slate-200"></div>
                    <span class="text-xs font-medium uppercase tracking-wider text-slate-400">atau</span>
                    <div class="h-px flex-1 bg-slate-200"></div>
                </div>

                <form method="POST" action="{{ route('login.attempt') }}" class="space-y-5" @submit="submitting = true">
                    @csrf
                    <div>
                        <label for="email" class="text-sm font-semibold text-slate-700">Alamat email</label>
                        <input id="email" name="email" type="email" value="{{ old('email') }}" autocomplete="email" required autofocus placeholder="nama@contoh.com"
                            class="mt-2 block w-full rounded-xl border px-4 py-3 text-slate-900 outline-none transition placeholder:text-slate-400 focus:ring-2 focus:ring-blue-600 {{ $errors->has('email') ? 'border-red-400 focus:border-red-400' : 'border-slate-300 focus:border-blue-600' }}">
                        @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <div class="flex items-center justify-between gap-4">
                            <label for="password" class="text-sm font-semibold text-slate-700">Kata sandi</label>
                            <a href="#" class="text-sm font-semibold text-blue-700 hover:text-blue-800">Lupa kata sandi?</a>
                        </div>
                        <div class="relative mt-2">
                            <input id="password" name="password" x-bind:type="showPassword ? 'text' : 'password'" autocomplete="current-password" required placeholder="Masukkan kata sandi"
                                class="block w-full rounded-xl border border-slate-300 px-4 py-3 pr-12 text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-600 focus:ring-2 focus:ring-blue-600">
                            <button type="button" x-on:click="showPassword = !showPassword" x-bind:aria-label="showPassword ? 'Sembunyikan kata sandi' : 'Tampilkan kata sandi'" class="absolute inset-y-0 right-0 flex w-12 items-center justify-center text-slate-400 hover:text-slate-700">
                                <svg x-show="!showPassword" class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M2.25 12s3.55-6 9.75-6 9.75 6 9.75 6-3.55 6-9.75 6-9.75-6-9.75-6Z" stroke-linecap="round" stroke-linejoin="round" /><circle cx="12" cy="12" r="2.5" /></svg>
                                <svg x-show="showPassword" class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="m3 3 18 18M10.58 10.59A2 2 0 0 0 13.41 13.4M9.88 5.14A10.8 10.8 0 0 1 12 4.95c6.2 0 9.75 7.05 9.75 7.05a15.38 15.38 0 0 1-3.21 4.04M6.16 6.16A15.36 15.36 0 0 0 2.25 12s3.55 7.05 9.75 7.05a10.7 10.7 0 0 0 3.37-.54" stroke-linecap="round" stroke-linejoin="round" /></svg>
                            </button>
                        </div>
                    </div>

                    <label class="flex cursor-pointer items-center gap-3 text-sm text-slate-600">
                        <input type="checkbox" name="remember" value="1" class="size-4 rounded border-slate-300 text-blue-700 focus:ring-blue-600">
                        Ingat saya di perangkat ini
                    </label>

                    <button type="submit" x-bind:disabled="submitting" class="flex w-full items-center justify-center gap-2 rounded-xl bg-blue-700 px-4 py-3.5 text-sm font-semibold text-white shadow-lg shadow-blue-700/20 transition hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 disabled:cursor-wait disabled:opacity-70">
                        <svg x-show="submitting" class="size-5 animate-spin" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle class="opacity-25" cx="12" cy="12" r="9" stroke="currentColor" stroke-width="3" /><path class="opacity-75" fill="currentColor" d="M21 12a9 9 0 0 1-9 9v-3a6 6 0 0 0 6-6h3Z" /></svg>
                        <span x-text="submitting ? 'Memproses...' : 'Masuk ke SIMLAB'"></span>
                    </button>
                </form>

                <p class="mt-8 text-center text-sm text-slate-500">Belum memiliki akun? <a href="#" class="font-semibold text-blue-700 hover:text-blue-800">Hubungi administrator</a></p>
            </div>
        </section>
    </main>
</body>

</html>
