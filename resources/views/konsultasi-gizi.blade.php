<x-layout>
    <div class="bg-white overflow-x-auto">
        <section class="pt-16 pb-8">
            <div class="container max-w-xl mx-auto px-4 mt-[64px]">
                <h2 class="text-3xl font-semibold text-violet-600 mb-6 text-center">Konsultasi Gizi</h2>

                <form action="{{ route('konsultasi-gizi') }}" method="POST">
                    @csrf
                    @method('post')
                    <div class="mb-4">
                        <label for="nama" class="block font-medium">Nama</label>
                        <input type="text" name="nama" class="w-full border rounded px-3 py-2" required>
                    </div>
                    <div class="mb-4">
                        <label for="jenis_kelamin" class="block font-medium">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="w-full border rounded px-3 py-2" required>
                            <option value="">Pilih jenis kelamin</option>
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="usia" class="block font-medium">Usia</label>
                        <select name="usia" class="w-full border rounded px-3 py-2" required>
                            <option value="">Pilih usia</option>
                            <option value="19-30 tahun">19-30 tahun</option>
                            <option value="31-45 tahun">31-45 tahun</option>
                            <option value="46-60 tahun">46-60 tahun</option>
                            <option value="61-70 tahun">61-70 tahun</option>
                            <option value=">70 tahun">&gt;70 tahun</option>
                        </select>
                    </div>
                    <button type="submit" class="px-4 py-2 bg-violet-500 text-white rounded w-full mt-6">Lihat
                        Rekomendasi</button>
                </form>
            </div>
        </section>

        <section class="container max-w-xl mx-auto px-4 mt-20 mb-10">
            @if (isset($hasil) && count($hasil) > 0)
                <h2 class="text-2xl font-bold mb-1 text-center">Hasil Rekomendasi Makanan</h2>
                <p class="text-center mb-8">Untuk usia {{ request()->usia }}</p>
                @foreach ($hasil as $key => $value)
                    <div
                        class="bg-white shadow-sm rounded-lg p-5 border border-gray-200 hover:shadow-xl transition flex">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $value->nama_makanan }}
                        </h3>

                    </div>
                @endforeach
            @endif
        </section>
    </div>
</x-layout>
