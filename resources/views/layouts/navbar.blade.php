<nav x-data="{ open: false }" class="fixed w-full bg-white shadow">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <div class="flex justify-between w-full">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a :href="route('welcome')">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex md">
                    <x-nav-link :href="route('/')" :active="request()->routeIs('/')">
                        {{ __('Home') }}
                    </x-nav-link>

                    <x-nav-link :href="route('konsultasi-gizi')" :active="request()->routeIs('/konsultasi-gizi')">
                        {{ __('Konsultasi gizi') }}
                    </x-nav-link>

                    <x-nav-link :href="route('register')" :active="request()->routeIs('/register')"
                        class="px-4 py-1 border border-violet-500 text-violet-500 hover:text-violet-400 hover:border-violet-400 hover:shadow-sm font-semibold rounded-md transition-colors duration-300 ease-in-out">
                        {{ __('Register') }}
                    </x-nav-link>

                    <x-nav-link :href="route('login')" :active="request()->routeIs('/login')"
                        class="px-4 py-1 bg-violet-500 text-white hover:text-white hover:border-violet-500 hover:bg-violet-400 transition-colors duration-300 ease-in-out font-semibold rounded-md">
                        {{ __('Login') }}
                    </x-nav-link>

                </div>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="backdrop-blur-sm h-screen">
            <div class="pt-2 pb-3 space-y-1 bg-white shadow">
                <x-responsive-nav-link :href="route('/')" :active="request()->routeIs('/')">
                    {{ __('Home') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('konsultasi-gizi')" :active="request()->routeIs('/konsultasi-gizi')">
                    {{ __('Konsultasi gizi') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('login')" :active="request()->routeIs('/login')">
                    {{ __('Login') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('register')" :active="request()->routeIs('/register')">
                    {{ __('Register') }}
                </x-responsive-nav-link>
            </div>
        </div>

    </div>
</nav>
