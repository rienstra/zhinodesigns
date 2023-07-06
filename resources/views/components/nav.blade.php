<nav class="bg-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-36 items-center w-full justify-between">
            <a href=" {{ url("/") }}" class="shrink-0">
                <img class="h-40 w-auto" src="{{ Vite::image('zhino-logo.png')}}" alt="zhinologo">
            </a>
            <div class="hidden sm:ml-6 sm:block">
                <div class="flex space-x-4">
                    <a href="{{ url('/') }}" class="rounded-md px-3 py-2 text-sm font-regular underline underline-offset-8">Home</a>
                    <a href="#showroom" class="rounded-md px-3 py-2 text-sm text-gray-900 hover:underline underline-offset-8">Showroom</a>
                    <a href="#toekomst" class="rounded-md px-3 py-2 text-sm text-gray-900 hover:underline underline-offset-8">Toekomst</a>
                    <a href="#contact" class="rounded-md px-3 py-2 text-sm text-gray-900 hover:underline underline-offset-8">Contact</a>
                </div>
            </div>

            <div class="hidden sm:ml-6 sm:block">
                <a href="/" @class(['hover:underline focus:font-bold transition-all font-thin', '!font-medium' => request()->is('/')])>NL</a> |
                <a href="/en" @class(['hover:underline focus:font-bold transition-all font-thin', '!font-medium' => request()->is('en')])>EN</a>
            </div>

            <div class="-mr-2 flex sm:hidden">
                <button type="button" class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>

                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>

                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2">
            <a href="#" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white">Home</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Showroom</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Toekomst</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact</a>
        </div>

    </div>
</nav>
