<x-dashboard-layout>
    {{-- HEADER --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- Content --}}
    <section class="lg:m-6 lg:p-6 rounded-md bg-white">
        <h1 class="text-4xl mb-4">Halo, Selamat Datang {{ Auth::user()->name }}</h1>
        <p class="text-lg">Karena setiap tubuh punya kebutuhan yang berbeda, sistem kami hadir untuk bantu Anda makan
            dengan
            lebih bijak.
        </p>
    </section>

</x-dashboard-layout>
