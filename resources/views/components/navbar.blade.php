<nav class="bg-blue-900" x-data="{ mobileMenu: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <a href="{{ url('/') }}" class="flex items-center gap-2 text-white">
                    <img src="{{ asset('image/logousu.png') }}" alt="Logo USU" class="size-9 rounded bg-white p-0.5 object-contain">
                    <span class="hidden text-sm font-semibold sm:block">SIMLAB</span>
                </a>
                <div class="ml-8 hidden md:block">
                    <div class="flex items-baseline space-x-2">
                        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                        <x-nav-link href="/tentang" :active="request()->is('tentang')">Tentang</x-nav-link>
                        <x-nav-link href="/berita" :active="request()->is('berita*')">Berita</x-nav-link>
                        <x-nav-link href="/layanan" :active="request()->is('layanan')">Layanan</x-nav-link>
                        <x-nav-link href="/kontak" :active="request()->is('kontak')">Kontak</x-nav-link>
                    </div>
                </div>
            </div>

            <div class="hidden md:block">
                <div class="flex items-center">
                    @auth
                        <button type="button" class="rounded-full p-1 text-gray-300 transition hover:text-white focus:outline-none focus:ring-2 focus:ring-indigo-400" aria-label="Lihat notifikasi">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" class="size-6">
                                <path d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>

                        <div class="relative ml-3" x-data="{ open: false }">
                            <button type="button" @click="open = !open" class="flex items-center gap-2 rounded-full px-2 py-1 text-white transition hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-indigo-400">
                                <span class="text-sm font-medium">{{ auth()->user()->name }}</span>
                                <span class="flex size-8 items-center justify-center rounded-full bg-blue-600 text-sm font-bold ring-2 ring-white/20">
                                    {{ \Illuminate\Support\Str::upper(\Illuminate\Support\Str::substr(auth()->user()->name, 0, 1)) }}
                                </span>
                            </button>

                            <div x-show="open" @click.outside="open = false" x-transition class="absolute right-0 z-50 mt-2 w-48 origin-top-right rounded-md bg-gray-800 py-1 shadow-lg outline-1 -outline-offset-1 outline-white/10">
                                <a href="/profile" class="block px-4 py-2 text-sm text-gray-300 hover:bg-white/5">Profil saya</a>
                                <a href="/settings" class="block px-4 py-2 text-sm text-gray-300 hover:bg-white/5">Pengaturan</a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="block w-full px-4 py-2 text-left text-sm text-gray-300 hover:bg-white/5">Keluar</button>
                                </form>
                            </div>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="rounded-lg bg-white px-4 py-2 text-sm font-semibold text-blue-900 shadow-sm transition hover:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-blue-900">
                            Masuk
                        </a>
                    @endauth
                </div>
            </div>

            <button type="button" @click="mobileMenu = !mobileMenu" class="inline-flex items-center justify-center rounded-md p-2 text-gray-300 hover:bg-white/10 hover:text-white focus:outline-none focus:ring-2 focus:ring-indigo-400 md:hidden" aria-label="Buka menu navigasi">
                <svg x-show="!mobileMenu" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="size-6" aria-hidden="true"><path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" /></svg>
                <svg x-show="mobileMenu" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="size-6" aria-hidden="true"><path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" /></svg>
            </button>
        </div>
    </div>

    <div x-show="mobileMenu" x-transition class="border-t border-white/10 md:hidden">
        <div class="space-y-1 px-2 py-3">
            <a href="/" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Home</a>
            <a href="/tentang" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Tentang</a>
            <a href="/berita" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Berita</a>
            <a href="/layanan" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Layanan</a>
            <a href="/kontak" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Kontak</a>
        </div>

        <div class="border-t border-white/10 px-4 py-3">
            @auth
                <p class="text-base font-medium text-white">{{ auth()->user()->name }}</p>
                <p class="mt-1 text-sm text-gray-400">{{ auth()->user()->email }}</p>
                <div class="mt-3 space-y-1">
                    <a href="/profile" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Profil saya</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="block w-full rounded-md px-3 py-2 text-left text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Keluar</button>
                    </form>
                </div>
            @else
                <a href="{{ route('login') }}" class="block rounded-md bg-white px-3 py-2 text-center text-base font-semibold text-blue-900 hover:bg-blue-50">Masuk</a>
            @endauth
        </div>
    </div>
</nav>
