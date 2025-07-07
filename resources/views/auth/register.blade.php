<x-guest-layout>

    <div class="flex items-center w-full max-w-md px-6 mx-auto lg:w-2/6">
        <div class="flex-1">
            <div class="text-center">
                <div class="flex justify-center mx-auto">
                    <h1 class="text-2xl lg:text-3xl font-bold">REGISTRASI</h1>
                </div>

                <p class="mt-3 text-gray-500">Daftarkan diri Anda!</p>
            </div>

            <div class="mt-8">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name -->
                    <div>
                        <x-input-label for="nama" :value="__('Nama')" />
                        <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama"
                            :value="old('nama')" required autofocus autocomplete="nama" />
                        <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                            name="password_confirmation" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-8">
                        <x-primary-button>
                            {{ __('Daftar') }}
                        </x-primary-button>
                    </div>
                </form>

                <p class="mt-6 text-sm text-center text-gray-400">Sudah terdaftar? <a href="{{ route('login') }}"
                        class="text-blue-500 focus:outline-none focus:underline hover:underline">Masuk</a>.
                </p>
            </div>
        </div>
    </div>

    <div class="hidden bg-cover lg:block lg:w-2/3"
        style="background-image: url(https://images.unsplash.com/photo-1550677133-afc1a1608f23?q=80&w=1090&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)">
        <div
            class="flex items-center justify-center text-center  h-full px-20 bg-gray-900 bg-opacity-65 backdrop-blur-sm">
            <div>
                <h2 class="text-2xl font-almendra text-white sm:text-4xl">NutriPick</h2>

                <p class="max-w-xl mt-3 text-gray-300 text-xl">
                    Rekomendasi makanan sehat berdasarkan kebutuhan gizi
                </p>
            </div>
        </div>
    </div>
</x-guest-layout>
