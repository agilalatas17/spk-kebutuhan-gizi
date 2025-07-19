<x-dashboard-layout>
    {{-- HEADER --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ubah Kriteria
        </h2>
    </x-slot>

    {{-- CONTENT --}}
    <section class="bg-white p-8 w-2/4">
        <form class="mt-6" method="post" action="{{ route('admin.kriteria.update', ['id' => $data->id]) }}"
            enctype="multipart/form-data">
            @method('put')
            @csrf

            <label class="text-sm text-gray-700 block mt-3" for="nama_kriteria">
                Nama Kriteria
                <input type="text" name="nama_kriteria" id="nama_kriteria" placeholder="Masukkan kriteria"
                    value="{{ old('nama_kriteria', $data->nama_kriteria) }}"
                    class="block w-full px-4 py-3 text-sm text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40" />
            </label>

            <label class="text-sm text-gray-700 block mt-3" for="atribut">
                Atribut
                <select name="atribut" id="atribut"
                    class="form-select block w-full px-4 py-3 text-sm text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40">
                    <option value="">Pilih Atribut</option>
                    <option value="benefit" {{ old('atribut', $data->atribut === 'benefit' ? 'selected' : '') }}>Benefit
                    </option>
                    <option value="cost" {{ old('atribut', $data->atribut === 'cost' ? 'selected' : '') }}>
                        Cost</option>
                </select>
            </label>

            <label class="text-sm text-gray-700 block mt-3" for="bobot">
                Bobot
                <div class="flex items-center mt-2">
                    <input type="text" placeholder="15" name="bobot" id="bobot"
                        value="{{ old('bobot', $data->bobot * 100) }}"
                        class="block w-full rounded-r-none placeholder-gray-400/70 rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40" />
                    <p
                        class="py-2.5 px-8 text-gray-800 !font-bold text-base bg-gray-100 border border-l-0 rounded-r-lg">
                        %</p>
                </div>
            </label>

            <div class="mt-8 sm:flex sm:items-center sm:-mx-2">
                <a href="{{ route('admin.kriteria.index') }}"
                    class="w-full px-4 py-2 text-sm text-center font-medium justify-center tracking-wide text-gray-700 capitalize transition-colors duration-300 transform border border-gray-300 cursor-pointer rounded-md sm:w-1/2 sm:mx-2 hover:bg-gray-100 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-40">
                    Batal
                </a>

                <x-primary-button type="submit"
                    class="w-full px-4 py-2 mt-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-violet-500 rounded-md sm:mt-0 sm:w-1/2 sm:mx-2 hover:bg-violet-400 focus:outline-none focus:ring focus:ring-violet-300 focus:ring-opacity-40">
                    Simpan
                </x-primary-button>
            </div>
        </form>
    </section>
</x-dashboard-layout>
