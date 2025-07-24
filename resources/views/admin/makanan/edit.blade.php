<x-dashboard-layout>
    {{-- HEADER --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ubah Makanan
        </h2>
    </x-slot>

    {{-- CONTENT --}}
    <section class="bg-white p-8 w-2/4">
        <form class="mt-6" method="POST" action="{{ route('admin.makanan.update', $makanan->id) }}"
            enctype="multipart/form-data">
            @method('put')
            @csrf

            <label class="text-sm text-gray-700 block mt-4" for="nama_makanan">
                <p class="font-semibold mb-1">Nama Makanan</p>
                <input type="text" name="nama_makanan" id="nama_makanan" placeholder="Masukkan nama makanan"
                    value="{{ old('nama_makanan', $makanan->nama_makanan) }}"
                    class="block w-full px-4 py-3 text-sm text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40" />
            </label>

            <label class="text-sm text-gray-700 block mt-4" for="kalori">
                <p class="font-semibold mb-1">Kalori</p>
                <select name="kalori" id="kalori"
                    class="form-select block w-full px-4 py-3 text-sm text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40">
                    <option selected>Pilih rentang kalori</option>
                    <option value=">450 kcal" {{ old('kalori', $makanan->kalori === '>450 kcal' ? 'selected' : '') }}>
                        &gt;450 kcal</option>
                    <option value="351-450 kcal"
                        {{ old('kalori', $makanan->kalori === '351-450 kcal' ? 'selected' : '') }}>351-450 kcal
                    </option>
                    <option value="251-351 kcal"
                        {{ old('kalori', $makanan->kalori === '251-351 kcal' ? 'selected' : '') }}>251-351 kcal
                    </option>
                    <option value="150-250 kcal"
                        {{ old('kalori', $makanan->kalori === '150-250 kcal' ? 'selected' : '') }}>150-250 kcal
                    </option>
                    <option value="<150 kcal" {{ old('kalori', $makanan->kalori === '<150 kcal' ? 'selected' : '') }}>
                        &lt;150 kcal</option>
                </select>
            </label>

            <label class="text-sm text-gray-700 block mt-4" for="protein">
                <p class="font-semibold mb-1">Protein</p>
                <select name="protein" id="protein"
                    class="form-select block w-full px-4 py-3 text-sm text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40">
                    <option selected>Pilih rentang protein</option>
                    <option value="<5 gr" {{ old('protein', $makanan->protein === '<5 gr' ? 'selected' : '') }}>&lt;5
                        gr</option>
                    <option value="5-9 gr" {{ old('protein', $makanan->protein === '5-9 gr' ? 'selected' : '') }}>5-9
                        gr</option>
                    <option value="10-14 gr" {{ old('protein', $makanan->protein === '10-14 gr' ? 'selected' : '') }}>
                        10-14 gr</option>
                    <option value="15-20 gr" {{ old('protein', $makanan->protein === '15-20 gr' ? 'selected' : '') }}>
                        15-20 gr</option>
                    <option value=">20 gr" {{ old('protein', $makanan->protein === '>20 gr' ? 'selected' : '') }}>
                        &gt;20 gr</option>
                </select>
            </label>

            <label class="text-sm text-gray-700 block mt-4" for="lemak_sehat">
                <p class="font-semibold mb-1">Lemak Sehat</p>
                <select name="lemak_sehat" id="lemak_sehat"
                    class="form-select block w-full px-4 py-3 text-sm text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40">
                    <option selected>Pilih rentang lemak sehat</option>
                    <option value="<2 gr"
                        {{ old('lemak_sehat', $makanan->lemak_sehat === '<2 gr' ? 'selected' : '') }}>&lt;2 gr
                    </option>
                    <option value="2-3 gr"
                        {{ old('lemak_sehat', $makanan->lemak_sehat === '2-3 gr' ? 'selected' : '') }}>2-3 gr</option>
                    <option value="4-5 gr"
                        {{ old('lemak_sehat', $makanan->lemak_sehat === '4-5 gr' ? 'selected' : '') }}>4-5 gr</option>
                    <option value="6-8 gr"
                        {{ old('lemak_sehat', $makanan->lemak_sehat === '6-8 gr' ? 'selected' : '') }}>6-8 gr</option>
                    <option value=">8 gr"
                        {{ old('lemak_sehat', $makanan->lemak_sehat === '>8 gr' ? 'selected' : '') }}>&gt;8 gr
                    </option>
                </select>
            </label>

            <label class="text-sm text-gray-700 block mt-4" for="serat">
                <p class="font-semibold mb-1">Serat</p>
                <select name="serat" id="serat"
                    class="form-select block w-full px-4 py-3 text-sm text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40">
                    <option selected>Pilih rentang serat</option>
                    <option value="<2 gr" {{ old('serat', $makanan->serat === '<2 gr' ? 'selected' : '') }}>&lt;2 gr
                    </option>
                    <option value="2-3 gr" {{ old('serat', $makanan->serat === '2-3 gr' ? 'selected' : '') }}>2-3 gr
                    </option>
                    <option value="4-5 gr" {{ old('serat', $makanan->serat === '4-5 gr' ? 'selected' : '') }}>4-5 gr
                    </option>
                    <option value="6-8 gr" {{ old('serat', $makanan->serat === '6-8 gr' ? 'selected' : '') }}>6-8 gr
                    </option>
                    <option value=">8 gr" {{ old('serat', $makanan->serat === '>8 gr' ? 'selected' : '') }}>&gt;8 gr
                    </option>
                </select>
            </label>

            <label class="text-sm text-gray-700 block mt-4" for="vitamin_mineral">
                <p class="font-semibold mb-1">Vitamin & Mineral</p>
                <select name="vitamin_mineral" id="vitamin_mineral"
                    class="form-select block w-full px-4 py-3 text-sm text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40">
                    <option selected>Pilih rentang vitamin dan mineral</option>
                    <option value="<20%"
                        {{ old('vitamin_mineral', $makanan->vitamin_mineral === '<20%' ? 'selected' : '') }}>&lt;20%
                    </option>
                    <option value="20-39%"
                        {{ old('vitamin_mineral', $makanan->vitamin_mineral === '20-39%' ? 'selected' : '') }}>20-39%
                    </option>
                    <option value="40-59%"
                        {{ old('vitamin_mineral', $makanan->vitamin_mineral === '40-59%' ? 'selected' : '') }}>40-59%
                    </option>
                    <option value="60-80%"
                        {{ old('vitamin_mineral', $makanan->vitamin_mineral === '60-80%' ? 'selected' : '') }}>60-80%
                    </option>
                    <option value=">80%"
                        {{ old('vitamin_mineral', $makanan->vitamin_mineral === '>80%' ? 'selected' : '') }}>&gt;80%
                    </option>
                </select>
            </label>

            <label class="text-sm text-gray-700 block mt-4" for="index_glikemik">
                <p class="font-semibold mb-1">Index Glikemik</p>
                <select name="index_glikemik" id="index_glikemik"
                    class="form-select block w-full px-4 py-3 text-sm text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40">
                    <option selected>Pilih rentang index glikemik</option>
                    <option value=">80"
                        {{ old('index_glikemik', $makanan->index_glikemik === '>80' ? 'selected' : '') }}>&gt;80
                    </option>
                    <option value="70-80"
                        {{ old('index_glikemik', $makanan->index_glikemik === '70-80' ? 'selected' : '') }}>70-80
                    </option>
                    <option value="56-69"
                        {{ old('index_glikemik', $makanan->index_glikemik === '56-69' ? 'selected' : '') }}>56-69
                    </option>
                    <option value="40-55"
                        {{ old('index_glikemik', $makanan->index_glikemik === '40-55' ? 'selected' : '') }}>40-55
                    </option>
                    <option value="<40"
                        {{ old('index_glikemik', $makanan->index_glikemik === '<40' ? 'selected' : '') }}>&lt;40
                    </option>
                </select>
            </label>

            <label class="text-sm text-gray-700 block mt-4" for="usia">
                <p class="font-semibold mb-1">Usia</p>
                <select name="usia" id="usia"
                    class="form-select block w-full px-4 py-3 text-sm text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40">
                    <option selected>Pilih rentang usia</option>
                    <option value=">70 tahun" {{ old('usia', $makanan->usia === '>70 tahun' ? 'selected' : '') }}>
                        &gt;70
                        tahun
                    </option>
                    <option value="61-70 tahun" {{ old('usia', $makanan->usia === '61-70 tahun' ? 'selected' : '') }}>
                        61-70 tahun</option>
                    <option value="46-60 tahun" {{ old('usia', $makanan->usia === '46-60 tahun' ? 'selected' : '') }}>
                        46-60 tahun</option>
                    <option value="31-45 tahun" {{ old('usia', $makanan->usia === '31-45 tahun' ? 'selected' : '') }}>
                        31-45 tahun</option>
                    <option value="19-30 tahun" {{ old('usia', $makanan->usia === '19-30 tahun' ? 'selected' : '') }}>
                        19-30 tahun</option>
                </select>
            </label>

            <div class="mt-8 sm:flex sm:items-center sm:-mx-2">
                <a href="{{ route('admin.makanan.index') }}"
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
