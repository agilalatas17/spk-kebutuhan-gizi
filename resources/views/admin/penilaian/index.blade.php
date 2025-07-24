<x-dashboard-layout>
    {{-- HEADER --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Penilaian Alternatif
        </h2>
    </x-slot>

    {{-- CONTENT --}}
    <section class=" lg:p-6 rounded-md bg-white">
        <div class="max-w-full overflow-x-auto">
            <form method="POST" action="{{ route('admin.penilaian.store') }}">
                @csrf
                @method('post')
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
                            @foreach ($kriteria as $k => $value)
                                <th scope="col"
                                    class="px-4 py-2 text-base text-center font-semibold font-nunito text-black border capitalize border-gray-200 whitespace-nowrap">
                                    {{ $value->nama_kriteria }}
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
                                            <input name="nilai[{{ $valueMakanan->id }}][{{ $valueKriteria->id }}]"
                                                type="number" placeholder="1-5" step="1" min="0"
                                                max="5"
                                                class="w-20 px-2 py-1 text-sm border text-center placeholder:text-gray-500/50 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                                                required>
                                        </td>
                                    @endforeach
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

                @if (isset($makanan) && count($makanan) > 0)
                    <div class="mt-6 flex justify-between items-center w-full">
                        <small class="text-amber-500">* Input bobot 1 sampai 5</small>
                        <button type="submit"
                            class="px-4 py-2 font-semibold text-white transition-colors duration-300 transform !w-fit capitalize rounded bg-violet-500 hover:bg-violet-400">
                            Simpan Nilai
                        </button>
                    </div>
                @endif
            </form>
        </div>

    </section>
</x-dashboard-layout>
