<x-dashboard-layout>
    {{-- HEADER --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Hasil & Perankingan
        </h2>
    </x-slot>

    {{-- CONTENT --}}
    {{-- Tabel nilai awal --}}
    <section class=" lg:p-6 rounded-md bg-white">
        <div class="max-w-full overflow-x-auto">
            <div class="mb-2">
                <p class="text-lg font-semibold">Nilai Awal</p>
            </div>
            <table class="w-full rounded-lg table-auto overflow-hidden">
                <thead class="border bg-violet-200">
                    <tr>
                        <th scope="col"
                            class="px-4 py-2 w-6 text-base text-center font-semibold font-nunito text-black border border-gray-200 whitespace-nowrap">
                            No
                        </th>

                        <th scope="col"
                            class="px-4 py-2 text-base text-center font-semibold font-nunito text-black border border-gray-200 whitespace-nowrap">
                            Nama Makanan
                        </th>
                        @foreach ($kriteria as $k)
                            <th scope="col"
                                class="px-4 py-2 text-base text-center font-semibold font-nunito text-black border capitalize border-gray-200 whitespace-nowrap">
                                {{ $k->nama_kriteria }}
                            </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @if (isset($makanan) && count($makanan) > 0)
                        @foreach ($makanan as $m => $valueMakanan)
                            <tr>
                                <td
                                    class="p-4 text-center text-sm font-medium whitespace-nowrap border border-gray-200">
                                    {{ $m + 1 }}
                                </td>
                                <td
                                    class="px-4 py-4 text-sm font-medium capitalize whitespace-nowrap border border-gray-200">
                                    {{ $valueMakanan->nama_makanan }}
                                </td>

                                @foreach ($kriteria as $k => $valueKriteria)
                                    <td
                                        class="px-4 py-4 text-sm font-medium capitalize text-center whitespace-nowrap border border-gray-200">
                                        {{ $nilaiAwal[$valueMakanan->id][$valueKriteria->id] ?? '-' }}
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                    @else
                        <tr class="border">
                            <td colspan="10" class="py-8 text-center">
                                <img src="{{ asset('assets/icons/no-data-table.svg') }}" width="120" class="mx-auto">
                                <p class="mt-4 text-lg text-gray-400">Data tidak tersedia!</p>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </section>

    {{-- Tabel Normalisasi --}}
    <section class=" lg:p-6 rounded-md bg-white">
        <div class="max-w-full overflow-x-auto">
            <div class="mb-2">
                <p class="text-lg font-semibold">Normalisasi</p>
            </div>
            <table class="w-full rounded-lg table-auto overflow-hidden">
                <thead class="border bg-violet-200">
                    <tr>
                        <th scope="col"
                            class="px-4 py-2 w-6 text-base text-center font-semibold font-nunito text-black border border-gray-200 whitespace-nowrap">
                            No
                        </th>

                        <th scope="col"
                            class="px-4 py-2 text-base text-center font-semibold font-nunito text-black border border-gray-200 whitespace-nowrap">
                            Nama Makanan
                        </th>
                        @foreach ($kriteria as $k)
                            <th scope="col"
                                class="px-4 py-2 text-base text-center font-semibold font-nunito text-black border capitalize border-gray-200 whitespace-nowrap">
                                {{ $k->nama_kriteria }}
                            </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @if (isset($makanan) && count($makanan) > 0)
                        @foreach ($makanan as $m => $valueMakanan)
                            <tr>
                                <td
                                    class="p-4 text-center text-sm font-medium whitespace-nowrap border border-gray-200">
                                    {{ $m + 1 }}
                                </td>
                                <td
                                    class="px-4 py-4 text-sm font-medium capitalize whitespace-nowrap border border-gray-200">
                                    {{ $valueMakanan->nama_makanan }}
                                </td>

                                @foreach ($kriteria as $k => $valueKriteria)
                                    <td
                                        class="px-4 py-4 text-sm font-medium capitalize text-center whitespace-nowrap border border-gray-200">
                                        {{ number_format($normalisasi[$valueMakanan->id][$valueKriteria->id] ?? 0, 2) }}
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                    @else
                        <tr class="border">
                            <td colspan="10" class="py-8 text-center">
                                <img src="{{ asset('assets/icons/no-data-table.svg') }}" width="120" class="mx-auto">
                                <p class="mt-4 text-lg text-gray-400">Data tidak tersedia!</p>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </section>

    {{-- Tabel Perankingan --}}
    <section class=" lg:p-6 rounded-md bg-white">
        <div class="max-w-full overflow-x-auto">
            <div class="mb-2">
                <p class="text-lg font-semibold">Skor Akhir & Ranking</p>
            </div>
            <table class="w-full rounded-lg table-auto overflow-hidden">
                <thead class="border bg-violet-200">
                    <tr>
                        <th scope="col"
                            class="px-4 w-6 py-2 text-base text-center font-semibold font-nunito text-black border border-gray-200 whitespace-nowrap">
                            Ranking
                        </th>
                        <th scope="col"
                            class="px-4 py-2 text-base text-center font-semibold font-nunito text-black border border-gray-200 whitespace-nowrap">
                            Nama Makanan
                        </th>
                        <th scope="col"
                            class="px-4 py-2 text-base text-center font-semibold font-nunito text-black border border-gray-200 whitespace-nowrap">
                            Skor
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @if (isset($hasil) && count($hasil) > 0)
                        @foreach ($hasil as $h => $value)
                            <tr>
                                <td
                                    class="p-4 text-center text-sm font-medium whitespace-nowrap border border-gray-200">
                                    {{ $h + 1 }}
                                </td>
                                <td
                                    class="px-4 py-4 text-sm font-medium capitalize whitespace-nowrap border border-gray-200">
                                    {{ $value['nama_makanan'] }}
                                </td>
                                <td
                                    class="px-4 py-4 text-sm font-medium capitalize text-center whitespace-nowrap border border-gray-200">
                                    {{ number_format($value['skor'], 2) }}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr class="border">
                            <td colspan="10" class="py-8 text-center">
                                <img src="{{ asset('assets/icons/no-data-table.svg') }}" width="120"
                                    class="mx-auto">
                                <p class="mt-4 text-lg text-gray-400">Data tidak tersedia!</p>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </section>
</x-dashboard-layout>
