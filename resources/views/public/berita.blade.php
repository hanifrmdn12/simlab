<x-layout>

    <x-header>
        {{ $title }}
    </x-header>

    <section class="min-h-screen py-16 bg-slate-100 bg-cover bg-center bg-no-repeat flex items-center" style="background-image: linear-gradient(to bottom, rgba(255,255,255,0.85), rgba(255,255,255,0.85)), url('{{ asset('image/ulosbiru.jpg') }}');">
    <x-container class="w-full">
        @isset($post)
            <article class="mx-auto w-full max-w-5xl rounded-2xl bg-white/90 p-8 shadow-sm backdrop-blur-sm sm:p-10 lg:p-12">
                <p class="text-sm font-medium text-blue-600">
                    {{ $post->author }} &middot; {{ $post->created_at?->translatedFormat('d F Y') ?? 'Tanggal belum tersedia' }}
                </p>

                <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">
                    {{ $post->title }}
                </h2>

                <div class="mt-8 max-w-4xl whitespace-pre-line leading-8 text-slate-600">
                    {!! $post->body !!}
                </div>

                <a href="{{ url('/berita') }}" class="mt-8 inline-block text-sm font-semibold text-blue-600 hover:text-blue-700">
                    &larr; Kembali ke daftar berita
                </a>
            </article>
        @else
            <div class="mx-auto max-w-3xl text-center">
                <p class="text-sm font-semibold uppercase tracking-widest text-blue-600">Informasi Terkini</p>
                <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Berita Laboratorium</h2>
            </div>

            <div class="mx-auto mt-10 grid max-w-5xl gap-6 md:grid-cols-2">
                @forelse ($posts as $post)
                    <article class="flex flex-col rounded-2xl bg-white/90 p-6 shadow-sm backdrop-blur-sm transition hover:-translate-y-1 hover:shadow-lg">
                        <p class="text-sm text-slate-500">
                            {{ $post->author }} &middot; {{ $post->created_at?->translatedFormat('d F Y') ?? 'Tanggal belum tersedia' }}
                        </p>

                        <h3 class="mt-3 text-xl font-bold text-slate-900">{{ $post->title }}</h3>

                        <p class="mt-3 leading-7 text-slate-600">
                            {{ \Illuminate\Support\Str::limit($post->body, 180) }}
                        </p>

                        <a href="{{ url('/berita/' . $post->slug) }}" class="mt-6 text-sm font-semibold text-blue-600 hover:text-blue-700">
                            Baca selengkapnya &rarr;
                        </a>
                    </article>
                @empty
                    <div class="rounded-2xl border border-dashed border-slate-300 bg-white/90 p-10 text-center text-slate-600 md:col-span-2">
                        Belum ada berita yang dipublikasikan.
                    </div>
                @endforelse
            </div>
        @endisset
    </x-container>
</section>

</x-layout>
