<x-dashboard-layout>
    {{-- HEADER --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Makanan
        </h2>
    </x-slot>

    {{-- CONTENT --}}
    <section class=" lg:p-6 rounded-md bg-white">
        <div class="flex justify-end mb-4 w-full">
            <a href="{{ route('admin.makanan.create') }}"
                class="px-4 py-2 font-semibold text-white transition-colors duration-300 transform !w-fit capitalize rounded bg-violet-500 hover:bg-violet-400">
                Tambah Data
            </a>
        </div>

        <div class="max-w-full overflow-x-auto">
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
                        <th scope="col"
                            class="px-4 py-2 text-base text-center font-semibold font-nunito text-black border border-gray-200 whitespace-nowrap">
                            Kalori
                        </th>
                        <th scope="col"
                            class="px-4 py-2 text-base text-center font-semibold font-nunito text-black border border-gray-200 whitespace-nowrap">
                            Protein
                        </th>
                        <th scope="col"
                            class="px-4 py-2 text-base text-center font-semibold font-nunito text-black border border-gray-200 whitespace-nowrap">
                            Lemak Sehat
                        </th>
                        <th scope="col"
                            class="px-4 py-2 text-base text-center font-semibold font-nunito text-black border border-gray-200 whitespace-nowrap">
                            Serat
                        </th>
                        <th scope="col"
                            class="px-4 py-2 text-base text-center font-semibold font-nunito text-black border border-gray-200 whitespace-nowrap">
                            Vitamin & Mineral
                        </th>
                        <th scope="col"
                            class="px-4 py-2 text-base text-center font-semibold font-nunito text-black border border-gray-200 whitespace-nowrap">
                            Index Glikemik (IG)
                        </th>
                        <th scope="col"
                            class="px-4 py-2 text-base text-center font-semibold font-nunito text-black border border-gray-200 whitespace-nowrap">
                            Usia
                        </th>
                        <th scope="col"
                            class="px-4 py-2 text-base text-center font-semibold font-nunito text-black border border-gray-200 whitespace-nowrap">
                            Aksi
                        </th>
                        {{-- @foreach ($makanan as $key => $value)
                            <th scope="col"
                                class="px-4 py-2 text-base text-center font-semibold font-nunito text-black border capitalize border-gray-200 whitespace-nowrap">
                                {{ $value->nama_makanan }}
                            </th>
                        @endforeach --}}
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @if (isset($makanan) && count($makanan) > 0)
                        @foreach ($makanan as $key => $value)
                            <tr>
                                <td
                                    class="p-4 text-center text-sm font-medium whitespace-nowrap border border-gray-200">
                                    {{ $key + 1 }}
                                </td>
                                <td
                                    class="px-4 py-4 text-sm font-medium capitalize whitespace-nowrap border border-gray-200">
                                    {{ $value->nama_makanan }}
                                </td>
                                <td
                                    class="px-4 py-4 text-sm text-center capitalize whitespace-nowrap border border-gray-200">
                                    {{ $value->kalori }}
                                </td>
                                <td class="px-4 py-4 text-sm text-center whitespace-nowrap border border-gray-200">
                                    {{ $value->protein }}
                                </td>
                                <td class="px-4 py-4 text-sm text-center whitespace-nowrap border border-gray-200">
                                    {{ $value->lemak_sehat }}
                                </td>
                                <td class="px-4 py-4 text-sm text-center whitespace-nowrap border border-gray-200">
                                    {{ $value->serat }}
                                </td>
                                <td class="px-4 py-4 text-sm text-center whitespace-nowrap border border-gray-200">
                                    {{ $value->vitamin_mineral }}
                                </td>
                                <td class="px-4 py-4 text-sm text-center whitespace-nowrap border border-gray-200">
                                    {{ $value->index_glikemik }}
                                </td>
                                <td class="px-4 py-4 text-sm text-center whitespace-nowrap border border-gray-200">
                                    {{ $value->usia }}
                                </td>
                                <td
                                    class="flex gap-x-2 justify-center px-4 py-4 text-sm text-center whitespace-nowrap border border-gray-200">
                                    <a href="{{ route('admin.makanan.edit', $value->id) }}"
                                        class="px-6 py-2 font-semibold rounded-lg text-white transition-colors duration-300 transform !w-fit !bg-yellow-500 hover:!bg-yellow-400 capitalize">
                                        Edit
                                    </a>
                                    <form method="POST" action="{{ route('admin.makanan.destroy', $value->id) }}"
                                        onsubmit="return confirm('Yakin ingin menghapus data ?')">
                                        @csrf
                                        @method('delete')

                                        <x-primary-button type="submit"
                                            class="!w-fit !bg-red-500 hover:!bg-red-400 capitalize">
                                            Delete
                                        </x-primary-button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr class="!outline-gray-600">
                            <td colspan="10" class="py-8 text-center outline-gray-300">
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
