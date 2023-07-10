<div id="showroom" class="bg-[#000000] relative">
    <div class="hidden md:block absolute bottom-0 right-0 text-neutral-800 uppercase font-[600] text-[10rem]">
        SHOWROOM
    </div>
    <div class="absolute top-0 left-1/2 right-1/2">
    </div>
    <div data-aos="fade-up" data-aos-delay="50" class="max-w-6xl mx-auto pt-14 md:pb-40" x-data="{ show : 'cat1' }">
        <span class="text-gray-200 flex flex-col md:flex-row justify-center text-center md:text-left pb-10 md:pb-20 md:pt-10">Meer foto's bekijken?<a href="#" class="text-[#15ED92]">@zhino_designs instagram</a></span>

{{--        Desktop Categories Navigation--}}
        <div class="hidden md:flex flex-col md:flex-row pb-14 md:pb-20 justify-center gap-20">
            <button @click="show = 'cat1'" class="flex flex-col gap-2 font-extrabold text-white text-2xl items-center relative">
                Signage
                <img :class="{ 'hidden' : show !== 'cat1' }" class="w-28 h-3 absolute -bottom-5" src="{{ Vite::image('art1.png') }}" alt="art">
            </button>
            <button @click="show = 'cat2'" class="flex flex-col gap-2 font-extrabold text-white text-2xl items-center relative">
                Vehicle Graphics
                <img :class="{ 'hidden' : show !== 'cat2' }" class="w-44 h-3 absolute -bottom-5" src="{{ Vite::image('art1.png') }}" alt="art">
            </button>
            <button @click="show = 'cat3'" class="flex flex-col gap-2 font-extrabold text-white text-2xl items-center relative">
                Stickering
                <img :class="{ 'hidden' : show !== 'cat3' }" class="w-28 h-3 absolute -bottom-5" src="{{ Vite::image('art1.png') }}" alt="art">
            </button>
            <button @click="show = 'cat4'" class="flex flex-col gap-2 font-extrabold text-white text-2xl items-center relative">
                Wall Graphics
                <img :class="{ 'hidden' : show !== 'cat4' }" class="w-34 h-3 absolute -bottom-5" src="{{ Vite::image('art1.png') }}" alt="art">
            </button>
        </div>

{{--        Mobile Categories Navigation--}}
        <div class="md:hidden px-6 gap-4 text-white text-sm pb-10 grid grid-rows-2 grid-cols-2">
            <button @click="show = 'cat1'" :class="{'rounded-full px-4 py-3 border-2': show === 'cat1'}">
                Signage
            </button>

            <button @click="show = 'cat2'" :class="{'rounded-full px-4 py-3 border-2': show === 'cat2'}">
                Vehicle Graphics
            </button>

            <button @click="show = 'cat3'" :class="{'rounded-full px-4 py-3 border-2': show === 'cat3'}">
                Stickering
            </button>

            <button @click="show = 'cat4'" :class="{'rounded-full px-4 py-3 border-2': show === 'cat4'}">
                Wall Graphics
            </button>
        </div>


{{--        Signage --}}
        <div x-show="show === 'cat1'" x-transition x-cloak class="sm:p-8 pb-20">

            {{--        Mobile Carousel--}}
            <div id="gallery" class="md:hidden relative w-full px-4" data-carousel="slide">
                <div class="relative h-80 overflow-hidden rounded-lg">
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ Vite::image('showcase1.webp')}}" alt="">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <img src="{{ Vite::image('showcase2.webp')}}" alt="">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ Vite::image('showcase3.webp')}}" class="" alt="">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ Vite::image('showcase4.webp')}}" alt="">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ Vite::image('showcase5.webp')}}" alt="">
                    </div>
                </div>

                <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                        </svg>
                        <span class="sr-only">Vorige</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="sr-only">Volgende</span>
                    </span>
                </button>
            </div>

{{--            Desktop--}}
            <div class="hidden md:block columns-1 gap-5 sm:columns-2 sm:gap-8 md:columns-2 [&>img:not(:first-child)]:mt-8">
                <img src="{{ Vite::image('showcase1.webp')}}">
                <img src="{{ Vite::image('showcase2.webp')}}">
                <img src="{{ Vite::image('showcase3.webp')}}">
                <img src="{{ Vite::image('showcase4.webp')}}"/>
                <img src="{{ Vite::image('showcase5.webp')}}"/>
                <img src="{{ Vite::image('showcase6.webp')}}"/>
                <img src="{{ Vite::image('showcase7.webp')}}"/>
            </div>
        </div>

        {{--        Vehicle Graphics --}}
        <div x-show="show === 'cat2'" x-transition x-cloak class="sm:p-8 pb-20">

            {{--        Mobile Carousel--}}
            <div id="gallery" class="md:hidden relative w-full px-4" data-carousel="slide">
                <div class="relative h-80 overflow-hidden rounded-lg">
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ Vite::image('showcase1.webp')}}" alt="">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <img src="{{ Vite::image('showcase2.webp')}}" alt="">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ Vite::image('showcase3.webp')}}" class="" alt="">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ Vite::image('showcase4.webp')}}" alt="">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ Vite::image('showcase5.webp')}}" alt="">
                    </div>
                </div>

                <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                        </svg>
                        <span class="sr-only">Vorige</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="sr-only">Volgende</span>
                    </span>
                </button>
            </div>

            {{--        Vehicle Graphics --}}
            <div class="hidden md:block columns-1 gap-5 sm:columns-2 sm:gap-8 md:columns-3 [&>img:not(:first-child)]:mt-8">
                <img src="{{ Vite::image('showcase2.webp')}}">
                <img src="{{ Vite::image('showcase2.webp')}}">
                <img src="{{ Vite::image('showcase3.webp')}}">
                <img src="{{ Vite::image('showcase4.webp')}}"/>
                <img src="{{ Vite::image('showcase5.webp')}}"/>
                <img src="{{ Vite::image('showcase6.webp')}}"/>
                <img src="{{ Vite::image('showcase7.webp')}}"/>
            </div>
        </div>

        <div x-show="show === 'cat3'" x-transition x-cloak class="sm:p-8 pb-20">

            {{--        Mobile Carousel--}}
            <div id="gallery" class="md:hidden relative w-full px-4" data-carousel="slide">
                <div class="relative h-80 overflow-hidden rounded-lg">
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ Vite::image('showcase1.webp')}}" alt="">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <img src="{{ Vite::image('showcase2.webp')}}" alt="">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ Vite::image('showcase3.webp')}}" class="" alt="">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ Vite::image('showcase4.webp')}}" alt="">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ Vite::image('showcase5.webp')}}" alt="">
                    </div>
                </div>

                <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                        </svg>
                        <span class="sr-only">Vorige</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="sr-only">Volgende</span>
                    </span>
                </button>
            </div>

{{--            Desktop--}}
            <div class="hidden md:block columns-1 gap-5 sm:columns-2 sm:gap-8 md:columns-4 [&>img:not(:first-child)]:mt-8">
                <img src="{{ Vite::image('showcase2.webp')}}">
                <img src="{{ Vite::image('showcase2.webp')}}">
                <img src="{{ Vite::image('showcase3.webp')}}">
                <img src="{{ Vite::image('showcase4.webp')}}"/>
                <img src="{{ Vite::image('showcase5.webp')}}"/>
                <img src="{{ Vite::image('showcase6.webp')}}"/>
                <img src="{{ Vite::image('showcase7.webp')}}"/>
            </div>
        </div>

        <div x-show="show === 'cat4'" x-transition x-cloak class="sm:p-8 pb-20">

            {{--        Mobile Carousel--}}
            <div id="gallery" class="md:hidden relative w-full px-4" data-carousel="slide">
                <div class="relative h-80 overflow-hidden rounded-lg">
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ Vite::image('showcase1.webp')}}" alt="">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <img src="{{ Vite::image('showcase2.webp')}}" alt="">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ Vite::image('showcase3.webp')}}" class="" alt="">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ Vite::image('showcase4.webp')}}" alt="">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ Vite::image('showcase5.webp')}}" alt="">
                    </div>
                </div>

                <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                        </svg>
                        <span class="sr-only">Vorige</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="sr-only">Volgende</span>
                    </span>
                </button>
            </div>

{{--            Desktop--}}
            <div class="hidden md:block columns-1 gap-5 sm:columns-2 sm:gap-8 md:columns-2 [&>img:not(:first-child)]:mt-8">
                <img src="{{ Vite::image('showcase4.webp')}}">
                <img src="{{ Vite::image('showcase4.webp')}}">
                <img src="{{ Vite::image('showcase3.webp')}}">
                <img src="{{ Vite::image('showcase4.webp')}}"/>
                <img src="{{ Vite::image('showcase5.webp')}}"/>
                <img src="{{ Vite::image('showcase6.webp')}}"/>
                <img src="{{ Vite::image('showcase7.webp')}}"/>
            </div>
        </div>





    </div>
</div>
