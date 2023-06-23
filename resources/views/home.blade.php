<x-layout>
    <div>
        <div class="max-w-6xl mx-auto pt-8 pb-14 relative">
            <div class="flex justify-between pb-20">
                <div class="flex gap-2">
                    <p class=" font-[400]">NL</p>
                    <div class="text-gray-400 font-[200]">|</div>
                    <p class="text-gray-400 font-[200]">EN</p>
                </div>
                <img class="h-32 w-auto" src="{{ Vite::image('zhino-logo.png')}}" alt="zhinologo">
                <nav class="w-fit text-right font-[300]">
                    <x-nav-item route="home">Home</x-nav-item>
                    <x-nav-item route="showroom">Showroom</x-nav-item>
                    <x-nav-item route="showroom">Plannen</x-nav-item>
                    <x-nav-item route="showroom">Contact</x-nav-item>
                </nav>
            </div>

            <div class="pb-28">
                <h1 class="text-5xl pb-8 w-5/6 font-[500]">Versterk jouw Bedrijf met Professionele Belettering en Grafische Diensten</h1>
                <p class="font-[300] w-4/6 leading-7">Ontdek de kracht van professionele belettering en grafische diensten bij ZhinoDesigns.
                    Wij bieden de perfecte reclame- en marketingoplossingen om jouw bedrijf te laten groeien.
                </p>
            </div>

            <a href="#" class="inline-flex gap-4 font-[300]">
                <svg width="16" height="26" viewBox="0 0 16 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 1C9 0.447715 8.55228 -2.41411e-08 8 0C7.44772 2.41411e-08 7 0.447715 7 1L9 1ZM7.29289 25.7071C7.68342 26.0976 8.31658 26.0976 8.70711 25.7071L15.0711 19.3431C15.4616 18.9526 15.4616 18.3195 15.0711 17.9289C14.6805 17.5384 14.0474 17.5384 13.6569 17.9289L8 23.5858L2.34315 17.9289C1.95262 17.5384 1.31946 17.5384 0.928933 17.9289C0.538409 18.3195 0.538409 18.9526 0.928933 19.3431L7.29289 25.7071ZM7 1L7 25L9 25L9 1L7 1Z" fill="black"/>
                </svg>
                Meer Lezen
            </a>

        </div>
    </div>

    <x-showroom-section />

    <x-plannen-section />

</x-layout>
