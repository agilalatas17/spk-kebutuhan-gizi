<x-dashboard-layout>
    {{-- HEADER --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Kriteria
        </h2>
    </x-slot>

    {{-- CONTENT --}}
    <section class="w-3/5 lg:m-6 lg:p-6 rounded-md bg-white">
        <div class="flex justify-end mb-4">
            <a href="{{ route('admin.kriteria.create') }}"
                class="px-4 py-2 font-semibold text-white transition-colors duration-300 transform !w-fit capitalize rounded bg-violet-500 hover:bg-violet-400">
                Add Data
            </a>
        </div>

        <table class="divid border w-full rounded-lg">
            <thead class="border bg-violet-200">
                <tr>
                    <th scope="col"
                        class="px-4 py-2 w-6 text-base text-center font-semibold font-nunito text-black border border-gray-200">
                        No
                    </th>

                    <th scope="col"
                        class="px-4 py-2 text-base text-center font-semibold font-nunito text-black border border-gray-200">
                        Kriteria
                    </th>
                    <th scope="col"
                        class="px-4 py-2 text-base text-center  font-nunito text-black border border-gray-200 font-semibold">
                        Atribut
                    </th>
                    <th scope="col"
                        class="px-4 py-2 text-base text-center font-semibold font-nunito text-black border border-gray-200">
                        Bobot (%)
                    </th>
                    <th scope="col"
                        class="px-4 py-2 text-base text-center font-semibold font-nunito text-black border border-gray-200">
                        Aksi
                    </th>

                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($data as $key => $value)
                    <tr>
                        <td class="p-4 text-center text-sm font-medium whitespace-nowrap border border-gray-200">
                            {{ $key + 1 }}
                        </td>
                        <td class="px-4 py-4 text-sm font-medium capitalize whitespace-nowrap border border-gray-200">
                            {{ $value->nama_kriteria }}
                        </td>
                        <td class="px-4 py-4 text-sm text-center capitalize whitespace-nowrap border border-gray-200">
                            {{ $value->atribut }}
                        </td>
                        <td class="px-4 py-4 text-sm text-center whitespace-nowrap border border-gray-200">
                            {{ $value->bobot }} %
                        </td>
                        <td
                            class="flex gap-x-2 justify-center px-4 py-4 text-sm text-center whitespace-nowrap border border-gray-200">
                            <a href="{{ route('admin.kriteria.edit', $value->id) }}"
                                class="px-6 py-2 font-semibold rounded-lg text-white transition-colors duration-300 transform !w-fit !bg-yellow-500 hover:!bg-yellow-400 capitalize">
                                Edit
                            </a>
                            <form method="POST" action="{{ route('admin.kriteria.destroy', $value->id) }}"
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
            </tbody>
        </table>
    </section>
</x-dashboard-layout>
