<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="flex items-center w-full max-w-md px-6 mx-auto lg:w-2/6">
        <div class="flex-1">
            <div class="text-center">
                <div class="flex justify-center mx-auto">
                    <h1 class="text-2xl lg:text-3xl font-bold">LOGIN</h1>
                </div>

                <p class="mt-3 text-gray-500">Masuk untuk mengakses akun Anda</p>
            </div>

            <div class="mt-8">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="flex justify-between mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                name="remember">
                            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>

                        @if (Route::has('password.request'))
                            <a class="block underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                href="{{ route('password.request') }}">
                                {{ __('Lupa kata sandi?') }}
                            </a>
                        @endif
                    </div>


                    <div class=" mt-8">
                        <x-primary-button>
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>

                </form>

                <p class="mt-6 text-sm text-center text-gray-400">Belum punya akun? <a href="{{ route('register') }}"
                        class="text-blue-500 focus:outline-none focus:underline hover:underline">Daftar</a>.
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
