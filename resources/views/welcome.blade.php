<x-layout>
    {{-- Hero Section --}}
    <header class="bg-white">
        <div class=" px-6 py-16 mx-auto text-center shadow-xl bg-white w-screen h-screen">
            <div class="mx-auto mt-28">
                <h1 class="text-3xl font-semibold text-gray-800 lg:text-4xl">Selamat datang di <span
                        class="font-almendra">NUTRIPICK</span></h1>
                <p class="mt-6 text-gray-600">Solusi cerdas bantu tentukan kebutuhan gizi harian secara
                    optimal dan efisien.</p>
                <a href="{{ route('konsultasi-gizi') }}"
                    class="inline-block px-5 py-2 mt-6 text-sm font-medium leading-5 text-center text-white capitalize bg-violet-500 rounded-lg hover:bg-violet-400 lg:mx-0 lg:w-auto focus:outline-none">
                    Mulai Sekarang
                </a>
            </div>

            <div class="flex justify-center mt-10">
                <img class="object-cover bg-top w-full h-96 rounded-xl lg:w-4/5"
                    src="{{ asset('assets/images/nutrition_large_v2.jpg') }}" />
            </div>
        </div>
    </header>

    {{-- Tentang Aplikasi --}}
    <section id="about" class="bg-violet-100">
        <div class="container px-6 py-16 mx-auto">
            <div class="flex flex-col lg:flex-row items-center justify-between">
                <div class="lg:w-1/2">
                    <h2 class="text-2xl font-bold text-gray-800 lg:text-3xl mb-4">Tentang <span
                            class="font-almendra">NUTRIPICK</span></h2>
                    <p class="text-gray-600">
                        NutriPick adalah aplikasi Sistem Pendukung Keputusan (SPK) berbasis web yang membantu menentukan
                        kebutuhan gizi harian berdasarkan berbagai kriteria seperti energi, protein, lemak, dan lainnya.
                        Menggunakan metode SAW (Simple Additive Weighting), aplikasi ini memberikan hasil rekomendasi
                        yang akurat dan informatif.
                    </p>
                </div>
                <div class="lg:w-1/2 mt-8 lg:mt-0">
                    <img src="{{ asset('assets/images/undraw_doctors_djoj.svg') }}" alt="about nutripick">
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="bg-gradient-to-r from-violet-500 to-pink-500 py-16">
        <div class="container mx-auto px-6 text-center text-white">
            <h2 class="text-3xl font-bold mb-4">Ayo tentukan makanan bergizi terbaikmu!</h2>
            <p class="mb-6">Gunakan NutriPick sekarang dan mulailah hidup sehat berdasarkan kebutuhan gizimu.</p>
            <a href="{{ route('konsultasi-gizi') }}"
                class="bg-white text-violet-600 font-semibold px-6 py-3 rounded-lg hover:bg-gray-100">
                Mulai Sekarang
            </a>
        </div>
    </section>
</x-layout>
