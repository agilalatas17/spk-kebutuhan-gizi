<x-dashboard-layout>
    {{-- HEADER --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    {{-- Content --}}
    <div class="py-8">
        <div class="mx-6 sm:px-6 lg:px-8 lg:py-4 bg-white">
            <h1 class="text-4xl mb-4">Halo, Selamat Datang {{ Auth::user()->name }}</h1>
            <p class="text-lg">Karena setiap tubuh punya kebutuhan yang berbeda, sistem kami hadir untuk bantu Anda makan
                dengan
                lebih bijak.
            </p>
        </div>
    </div>
</x-dashboard-layout>
