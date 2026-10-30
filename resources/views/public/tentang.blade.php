<x-layout>
    <x-header>{{ $title }}</x-header>

    <section id="tentang" class="bg-white py-10">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="grid gap-14 lg:grid-cols-2">

                <div>

                    <span class="text-sm font-semibold uppercase tracking-widest text-blue-600">
                        Tentang Laboratorium
                    </span>

                    <h2 class="mt-4 text-4xl font-bold text-slate-900">
                        Mendukung Pelayanan dan Pengujian Laboratorium Berkualitas
                    </h2>

                </div>

                <div>

                    <p class="text-lg leading-8 text-slate-600">
                        Laboratorium Terpadu FK USU hadir untuk memberikan pelayanan
                        pemeriksaan laboratorium yang profesional dengan dukungan
                        tenaga ahli, fasilitas modern, serta sistem pelayanan yang efektif.
                    </p>

                    <div class="mt-10 grid gap-6 sm:grid-cols-2">

                        <div class="rounded-2xl border border-slate-200 p-6">
                            <h3 class="text-lg font-semibold text-slate-900">
                                Profesional
                            </h3>

                            <p class="mt-2 text-sm text-slate-600">
                                Ditangani oleh tenaga ahli dan staf berpengalaman.
                            </p>
                        </div>

                        <div class="rounded-2xl border border-slate-200 p-6">
                            <h3 class="text-lg font-semibold text-slate-900">
                                Modern
                            </h3>

                            <p class="mt-2 text-sm text-slate-600">
                                Menggunakan fasilitas dan sistem laboratorium modern.
                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <x-struktur-organisasi />

</x-layout>
