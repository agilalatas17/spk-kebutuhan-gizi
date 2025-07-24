<x-dashboard-layout>
    {{-- HEADER --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah Makanan
        </h2>
    </x-slot>

    {{-- CONTENT --}}
    <section class="bg-white p-8 w-2/4">
        <form class="mt-6" method="POST" action="{{ route('admin.makanan.store') }}" enctype="multipart/form-data">
            @method('post')
            @csrf

            <label class="text-sm text-gray-700 block mt-4" for="nama_makanan">
                <p class="font-semibold mb-1">Nama Makanan</p>
                <input type="text" name="nama_makanan" id="nama_makanan" placeholder="Masukkan nama makanan"
                    class="block w-full px-4 py-3 text-sm text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40" />
            </label>

            <label class="text-sm text-gray-700 block mt-4" for="kalori">
                <p class="font-semibold mb-1">Kalori</p>
                <select name="kalori" id="kalori"
                    class="form-select block w-full px-4 py-3 text-sm text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40">
                    <option value="">Pilih rentang kalori</option>
                    <option value=">450 kcal">&gt;450 kcal</option>
                    <option value="351-450 kcal">351-450 kcal</option>
                    <option value="251-351 kcal">251-351 kcal</option>
                    <option value="150-250 kcal">150-250 kcal</option>
                    <option value="<150 kcal">&lt;150 kcal</option>
                </select>
            </label>

            <label class="text-sm text-gray-700 block mt-4" for="protein">
                <p class="font-semibold mb-1">Protein</p>
                <select name="protein" id="protein"
                    class="form-select block w-full px-4 py-3 text-sm text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40">
                    <option value="">Pilih rentang protein</option>
                    <option value="<5 gr">&lt;5 gr</option>
                    <option value="5-9 gr">5-9 gr</option>
                    <option value="10-14 gr">10-14 gr</option>
                    <option value="15-20 gr">15-20 gr</option>
                    <option value=">20 gr">&gt;20 gr</option>
                </select>
            </label>

            <label class="text-sm text-gray-700 block mt-4" for="lemak_sehat">
                <p class="font-semibold mb-1">Lemak Sehat</p>
                <select name="lemak_sehat" id="lemak_sehat"
                    class="form-select block w-full px-4 py-3 text-sm text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40">
                    <option value="">Pilih rentang lemak sehat</option>
                    <option value="<2 gr">&lt;2 gr</option>
                    <option value="2-3 gr">2-3 gr</option>
                    <option value="4-5 gr">4-5 gr</option>
                    <option value="6-8 gr">6-8 gr</option>
                    <option value=">8 gr">&gt;8 gr</option>
                </select>
            </label>

            <label class="text-sm text-gray-700 block mt-4" for="serat">
                <p class="font-semibold mb-1">Serat</p>
                <select name="serat" id="serat"
                    class="form-select block w-full px-4 py-3 text-sm text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40">
                    <option value="">Pilih rentang serat</option>
                    <option value="<2 gr">&lt;2 gr</option>
                    <option value="2-3 gr">2-3 gr</option>
                    <option value="4-5 gr">4-5 gr</option>
                    <option value="6-8 gr">6-8 gr</option>
                    <option value=">8 gr">&gt;8 gr</option>
                </select>
            </label>

            <label class="text-sm text-gray-700 block mt-4" for="vitamin_mineral">
                <p class="font-semibold mb-1">Vitamin & Mineral</p>
                <select name="vitamin_mineral" id="vitamin_mineral"
                    class="form-select block w-full px-4 py-3 text-sm text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40">
                    <option value="">Pilih rentang vitamin dan mineral</option>
                    <option value="<20%">&lt;20%</option>
                    <option value="20-39%">20-39%</option>
                    <option value="40-59%">40-59%</option>
                    <option value="60-80%">60-80%</option>
                    <option value=">80%">&gt;80%</option>
                </select>
            </label>

            <label class="text-sm text-gray-700 block mt-4" for="index_glikemik">
                <p class="font-semibold mb-1">Index Glikemik</p>
                <select name="index_glikemik" id="index_glikemik"
                    class="form-select block w-full px-4 py-3 text-sm text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40">
                    <option value="">Pilih rentang index glikemik</option>
                    <option value=">80">&gt;80</option>
                    <option value="70-80">70-80</option>
                    <option value="56-69">56-69</option>
                    <option value="40-55">40-55</option>
                    <option value="<40">&lt;40</option>
                </select>
            </label>

            <label class="text-sm text-gray-700 block mt-4" for="usia">
                <p class="font-semibold mb-1">Usia</p>
                <select name="usia" id="usia"
                    class="form-select block w-full px-4 py-3 text-sm text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40">
                    <option value="">Pilih rentang usia</option>
                    <option value="1">&gt;70 tahun</option>
                    <option value="61-70 tahun">61-70 tahun</option>
                    <option value="46-60 tahun">46-60 tahun</option>
                    <option value="31-45 tahun">31-45 tahun</option>
                    <option value="19-30 tahun">19-30 tahun</option>
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
