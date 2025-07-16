<x-dashboard-layout>
    {{-- HEADER --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Kriteria
        </h2>
    </x-slot>

    {{-- CONTENT --}}
    <section class="w-3/5 lg:m-6 lg:p-6 rounded-md bg-white">
        <div x-data="{ isOpen: true }" class="flex justify-end mb-4">
            <x-primary-button x-on:click="$dispatch('open-modal', 'add-kriteria-form')" type="button"
                class="!w-fit capitalize rounded bg-violet-500 hover:bg-violet-400">
                Add Data
            </x-primary-button>

            <x-modal name="add-kriteria-form" maxWidth="lg"
                class="flex  justify-center items-center text-center sm:block sm:p-0 border border-red-600">
                <div class="p-8">
                    <h3 class="text-xl font-bold leading-6 text-gray-800 capitalize">
                        {{ $title }}
                    </h3>

                    <form class="mt-6" method="POST" action="{{ route('admin.kriteria.store') }}"
                        enctype="multipart/form-data">
                        @method('post')
                        @csrf

                        <label class="text-sm text-gray-700 block mt-3" for="nama_kriteria">
                            Nama Kriteria
                            <input type="text" name="nama_kriteria" id="nama_kriteria"
                                placeholder="Masukkan kriteria"
                                class="block w-full px-4 py-3 text-sm text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40" />
                        </label>

                        <label class="text-sm text-gray-700 block mt-3" for="atribut">
                            Atribut
                            <select name="atribut" id="atribut"
                                class="form-select block w-full px-4 py-3 text-sm text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40">
                                <option value="">Pilih Atribut</option>
                                <option value="benefit">Benefit</option>
                                <option value="cost">Cost</option>
                            </select>
                        </label>

                        <label class="text-sm text-gray-700 block mt-3" for="bobot">
                            Bobot
                            <div class="flex items-center mt-2">
                                <input type="text" placeholder="15" name="bobot" id="bobot"
                                    class="block w-full rounded-r-none placeholder-gray-400/70 rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40" />
                                <p
                                    class="py-2.5 px-8 text-gray-800 !font-bold text-base bg-gray-100 border border-l-0 rounded-r-lg">
                                    %</p>
                            </div>
                        </label>

                        <div class="mt-8 sm:flex sm:items-center sm:-mx-2">
                            <x-secondary-button x-on:click="$dispatch('close-modal', 'add-kriteria-form')"
                                type="button"
                                class="w-full px-4 py-2 text-sm font-medium justify-center tracking-wide text-gray-700 capitalize transition-colors duration-300 transform border border-gray-200 rounded-md sm:w-1/2 sm:mx-2 hover:bg-gray-100 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-40">
                                Batal
                            </x-secondary-button>

                            <x-primary-button type="submit"
                                class="w-full px-4 py-2 mt-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-violet-500 rounded-md sm:mt-0 sm:w-1/2 sm:mx-2 hover:bg-violet-400 focus:outline-none focus:ring focus:ring-violet-300 focus:ring-opacity-40">
                                Simpan
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </x-modal>

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
                            <x-primary-button class="!w-fit !bg-yellow-500 hover:!bg-yellow-400 capitalize">
                                Edit
                            </x-primary-button>
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
