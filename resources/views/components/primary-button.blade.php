<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full px-4 py-2 uppercase font-semibold text-sm text-white tracking-wide transition-colors  duration-300 transform ease-in-out bg-violet-500 rounded-lg hover:bg-violet-400 focus:outline-none focus:bg-violet-300 focus:ring focus:ring-violet-300 focus:ring-opacity-50 text-center']) }}>
    {{ $slot }}
</button>
