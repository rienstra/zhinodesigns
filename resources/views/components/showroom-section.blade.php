



<div id="showroom" class="bg-[#000000] relative">
    <div class="hidden md:block absolute bottom-0 right-0 text-neutral-800 uppercase font-[600] text-[10rem]">
        SHOWROOM
    </div>
    <div class="absolute top-0 left-1/2 right-1/2">
    </div>
    <div data-aos="fade-up" data-aos-delay="50" class="max-w-6xl mx-auto pt-14 md:pb-40" x-data="{ show : 'cat1' }">
        <span class="text-gray-200 flex flex-col md:flex-row justify-center text-center md:text-left pb-10 md:pb-20 md:pt-10">Meer foto's bekijken?<a href="#" class="text-[#15ED92]">@zhino_designs instagram</a></span>

        <div class="flex flex-col md:flex-row pb-14 md:pb-20 justify-center gap-8 md:gap-20">
            <button @click="show = 'cat1'" class="flex flex-col gap-2 font-extrabold text-white text-lg md:text-2xl items-center relative">
                Signage
                <img :class="{ 'hidden' : show !== 'cat1' }" class="w-28 h-3 absolute -bottom-5" src="{{ Vite::image('art1.png') }}" alt="art">
            </button>
            <button @click="show = 'cat2'" class="flex flex-col gap-2 font-extrabold text-white text-lg md:text-2xl items-center relative">
                Vehicle Graphics
                <img :class="{ 'hidden' : show !== 'cat2' }" class="w-44 h-3 absolute -bottom-5" src="{{ Vite::image('art1.png') }}" alt="art">
            </button>
            <button @click="show = 'cat3'" class="flex flex-col gap-2 font-extrabold text-white text-lg md:text-2xl items-center relative">
                Stickering
                <img :class="{ 'hidden' : show !== 'cat3' }" class="w-28 h-3 absolute -bottom-5" src="{{ Vite::image('art1.png') }}" alt="art">
            </button>
            <button @click="show = 'cat4'" class="flex flex-col gap-2 font-extrabold text-white text-lg md:text-2xl items-center relative">
                Wall Graphics
                <img :class="{ 'hidden' : show !== 'cat4' }" class="w-34 h-3 absolute -bottom-5" src="{{ Vite::image('art1.png') }}" alt="art">
            </button>
        </div>

        <div x-show="show === 'cat1'" x-transition x-cloak class="p-5 sm:p-8">
            <div class="columns-1 gap-5 sm:columns-2 sm:gap-8 md:columns-2 [&>img:not(:first-child)]:mt-8">
                <img src="{{ Vite::image('showcase1.jpg')}}">
                <img src="{{ Vite::image('showcase2.jpg')}}">
                <img src="{{ Vite::image('showcase3.webp')}}">
                <img src="{{ Vite::image('showcase4.jpg')}}"/>
                <img src="{{ Vite::image('showcase5.jpg')}}"/>
                <img src="{{ Vite::image('showcase6.jpg')}}"/>
                <img src="{{ Vite::image('showcase7.jpg')}}"/>
            </div>
        </div>

        <div x-show="show === 'cat2'" x-transition x-cloak class="p-5 sm:p-8">
            <div class="columns-1 gap-5 sm:columns-2 sm:gap-8 md:columns-3 [&>img:not(:first-child)]:mt-8">
                <img src="{{ Vite::image('showcase2.jpg')}}">
                <img src="{{ Vite::image('showcase2.jpg')}}">
                <img src="{{ Vite::image('showcase3.webp')}}">
                <img src="{{ Vite::image('showcase4.jpg')}}"/>
                <img src="{{ Vite::image('showcase5.jpg')}}"/>
                <img src="{{ Vite::image('showcase6.jpg')}}"/>
                <img src="{{ Vite::image('showcase7.jpg')}}"/>
            </div>
        </div>

        <div x-show="show === 'cat3'" x-transition x-cloak class="p-5 sm:p-8">
            <div class="columns-1 gap-5 sm:columns-2 sm:gap-8 md:columns-4 [&>img:not(:first-child)]:mt-8">
                <img src="{{ Vite::image('showcase2.jpg')}}">
                <img src="{{ Vite::image('showcase2.jpg')}}">
                <img src="{{ Vite::image('showcase3.webp')}}">
                <img src="{{ Vite::image('showcase4.jpg')}}"/>
                <img src="{{ Vite::image('showcase5.jpg')}}"/>
                <img src="{{ Vite::image('showcase6.jpg')}}"/>
                <img src="{{ Vite::image('showcase7.jpg')}}"/>
            </div>
        </div>

        <div x-show="show === 'cat4'" x-transition x-cloak class="p-5 sm:p-8">
            <div class="columns-1 gap-5 sm:columns-2 sm:gap-8 md:columns-2 [&>img:not(:first-child)]:mt-8">
                <img src="{{ Vite::image('showcase4.jpg')}}">
                <img src="{{ Vite::image('showcase4.jpg')}}">
                <img src="{{ Vite::image('showcase3.webp')}}">
                <img src="{{ Vite::image('showcase4.jpg')}}"/>
                <img src="{{ Vite::image('showcase5.jpg')}}"/>
                <img src="{{ Vite::image('showcase6.jpg')}}"/>
                <img src="{{ Vite::image('showcase7.jpg')}}"/>
            </div>
        </div>



{{--        <div x-show="show === 'cat2'"--}}
{{--             x-transition--}}
{{--             x-cloak--}}
{{--             class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 md:gap-4 auto-rows-max">--}}
{{--            <div class="aspect-w-16 aspect-h-9 md:aspect-h-16">--}}
{{--                <img src="{{ Vite::image('showcase5.jpg')}}" class="w-full h-full object-cover">--}}
{{--            </div>--}}
{{--            <div class="aspect-w-16 aspect-h-9 md:aspect-h-32">--}}
{{--                <img src="{{ Vite::image('showcase2.jpg')}}" class="w-full h-full object-cover">--}}
{{--            </div>--}}
{{--            <div class="aspect-w-16 aspect-h-9 md:aspect-h-24">--}}
{{--                <img src="{{ Vite::image('showcase3.webp')}}" class="w-full h-full object-cover">--}}
{{--            </div>--}}
{{--            <div class="aspect-w-16 aspect-h-9 md:aspect-h-16">--}}
{{--                <img src="{{ Vite::image('showcase8.jpg')}}" class="w-full h-full object-cover">--}}
{{--            </div>--}}
{{--            <!-- Voeg meer afbeeldingen toe zoals nodig -->--}}
{{--        </div>--}}

{{--        <div x-show="show === 'cat3'"--}}
{{--             x-transition--}}
{{--             x-cloak--}}
{{--             class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 md:gap-4 auto-rows-max">--}}
{{--            <div class="aspect-w-16 aspect-h-9 md:aspect-h-16">--}}
{{--                <img src="{{ Vite::image('showcase7.jpg')}}" class="w-full h-full object-cover">--}}
{{--            </div>--}}
{{--            <div class="aspect-w-16 aspect-h-9 md:aspect-h-32">--}}
{{--                <img src="{{ Vite::image('showcase8.jpg')}}" class="w-full h-full object-cover">--}}
{{--            </div>--}}
{{--            <div class="aspect-w-16 aspect-h-9 md:aspect-h-24">--}}
{{--                <img src="{{ Vite::image('showcase3.webp')}}" class="w-full h-full object-cover">--}}
{{--            </div>--}}
{{--            <div class="aspect-w-16 aspect-h-9 md:aspect-h-16">--}}
{{--                <img src="{{ Vite::image('showcase8.jpg')}}" class="w-full h-full object-cover">--}}
{{--            </div>--}}
{{--            <!-- Voeg meer afbeeldingen toe zoals nodig -->--}}
{{--        </div>--}}

{{--        <div x-show="show === 'cat4'"--}}
{{--             x-transition--}}
{{--             x-cloak--}}
{{--             class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 md:gap-4 auto-rows-max">--}}
{{--            <div class="aspect-w-16 aspect-h-9 md:aspect-h-16">--}}
{{--                <img src="{{ Vite::image('showcase2.jpg')}}" class="w-full h-full object-cover">--}}
{{--            </div>--}}
{{--            <div class="aspect-w-16 aspect-h-9 md:aspect-h-32">--}}
{{--                <img src="{{ Vite::image('showcase1.jpg')}}" class="w-full h-full object-cover">--}}
{{--            </div>--}}
{{--            <div class="aspect-w-16 aspect-h-9 md:aspect-h-24">--}}
{{--                <img src="{{ Vite::image('showcase3.webp')}}" class="w-full h-full object-cover">--}}
{{--            </div>--}}
{{--            <div class="aspect-w-16 aspect-h-9 md:aspect-h-16">--}}
{{--                <img src="{{ Vite::image('showcase5.jpg')}}" class="w-full h-full object-cover">--}}
{{--            </div>--}}
{{--            <!-- Voeg meer afbeeldingen toe zoals nodig -->--}}
{{--        </div>--}}

        {{--                Signage--}}
{{--        <div x-transition x-show="show === 'cat1'" x-cloak class="grid md:grid-cols-3 gap-4">--}}
{{--            <div class="overflow-hidden aspect-w-1 aspect-h-1 md:aspect-none">--}}
{{--                <img src="{{ Vite::image('showcase1.jpg')}}" class="object-cover max-h-[30vh] md:max-h-full">--}}
{{--            </div>--}}
{{--            <div class="overflow-hidden aspect-w-1 aspect-h-1 md:aspect-none">--}}
{{--                <img src="{{ Vite::image('showcase2.jpg')}}" class="object-cover max-h-[30vh] md:max-h-full">--}}
{{--            </div>--}}
{{--            <div class="overflow-hidden aspect-w-1 aspect-h-1 md:aspect-none">--}}
{{--                <img src="{{ Vite::image('showcase3.webp')}}" class="object-cover max-h-[30vh] md:max-h-full">--}}
{{--            </div>--}}
{{--            <div class="overflow-hidden aspect-w-1 aspect-h-1 md:aspect-none">--}}
{{--                <img src="{{ Vite::image('showcase8.jpg')}}" class="object-cover max-h-[30vh] md:max-h-full">--}}
{{--            </div>--}}
{{--            <div class="overflow-hidden aspect-w-1 aspect-h-1 md:aspect-none">--}}
{{--                <img src="{{ Vite::image('showcase4.jpg')}}" class="object-cover max-h-[30vh] md:max-h-full">--}}
{{--            </div>--}}
{{--            <div class="overflow-hidden aspect-w-1 aspect-h-1 md:aspect-none">--}}
{{--                <img src="{{ Vite::image('showcase1.jpg')}}" class="object-cover max-h-[30vh] md:max-h-full">--}}
{{--            </div>--}}
{{--            <!-- Voeg meer afbeeldingen toe zoals nodig -->--}}
{{--        </div>--}}

{{--        --}}{{--            Vehicle Graphics--}}
{{--        <div x-transition x-show="show === 'cat2'" x-cloak class="grid md:grid-cols-3 gap-4">--}}
{{--            <div class="overflow-hidden">--}}
{{--                <img src="{{ Vite::image('showcase5.jpg')}}" class="w-full h-full object-cover">--}}
{{--            </div>--}}
{{--            <div class="overflow-hidden">--}}
{{--                <img src="{{ Vite::image('showcase6.jpg')}}" class="w-full h-full object-cover">--}}
{{--            </div>--}}
{{--            <div class="overflow-hidden">--}}
{{--                <img src="{{ Vite::image('showcase7.jpg')}}" class="w-full h-full object-cover">--}}
{{--            </div>--}}
{{--            <div class="overflow-hidden">--}}
{{--                <img src="{{ Vite::image('showcase8.jpg')}}" class="w-full h-full object-cover">--}}
{{--            </div>--}}
{{--            <div class="overflow-hidden">--}}
{{--                <img src="{{ Vite::image('showcase4.jpg')}}" class="w-full h-full object-cover">--}}
{{--            </div>--}}
{{--            <div class="overflow-hidden">--}}
{{--                <img src="{{ Vite::image('showcase1.jpg')}}" class="w-full h-full object-cover">--}}
{{--            </div>--}}
{{--            <!-- Voeg meer afbeeldingen toe zoals nodig -->--}}
{{--        </div>--}}

{{--            Stickering--}}
{{--        <div x-transition x-show="show === 'cat3'" x-cloak class="grid md:grid-cols-3 gap-4">--}}
{{--            <div class="overflow-hidden">--}}
{{--                <img src="{{ Vite::image('showcase1.jpg')}}" class="w-full h-full object-cover">--}}
{{--            </div>--}}
{{--            <div class="overflow-hidden">--}}
{{--                <img src="{{ Vite::image('showcase4.jpg')}}" class="w-full h-full object-cover">--}}
{{--            </div>--}}
{{--            <div class="overflow-hidden">--}}
{{--                <img src="{{ Vite::image('showcase1.jpg')}}" class="w-full h-full object-cover">--}}
{{--            </div>--}}
{{--            <div class="overflow-hidden">--}}
{{--                <img src="{{ Vite::image('showcase2.jpg')}}" class="w-full h-full object-cover">--}}
{{--            </div>--}}
{{--            <div class="overflow-hidden">--}}
{{--                <img src="{{ Vite::image('showcase2.jpg')}}" class="w-full h-full object-cover">--}}
{{--            </div>--}}
{{--            <div class="overflow-hidden">--}}
{{--                <img src="{{ Vite::image('showcase4.jpg')}}" class="w-full h-full object-cover">--}}
{{--            </div>--}}
{{--            <!-- Voeg meer afbeeldingen toe zoals nodig -->--}}
{{--        </div>--}}

{{--            Wall Graphics--}}
{{--        <div x-transition x-show="show === 'cat4'" x-cloak class="grid md:grid-cols-3 gap-4">--}}
{{--            <div class="overflow-hidden">--}}
{{--                <img src="{{ Vite::image('showcase2.jpg')}}" class="w-full h-full object-cover">--}}
{{--            </div>--}}
{{--            <div class="overflow-hidden">--}}
{{--                <img src="{{ Vite::image('showcase4.jpg')}}" class="w-full h-full object-cover">--}}
{{--            </div>--}}
{{--            <div class="overflow-hidden">--}}
{{--                <img src="{{ Vite::image('showcase1.jpg')}}" class="w-full h-full object-cover">--}}
{{--            </div>--}}
{{--            <div class="overflow-hidden">--}}
{{--                <img src="{{ Vite::image('showcase2.jpg')}}" class="w-full h-full object-cover">--}}
{{--            </div>--}}
{{--            <div class="overflow-hidden">--}}
{{--                <img src="{{ Vite::image('showcase4.jpg')}}" class="w-full h-full object-cover">--}}
{{--            </div>--}}
{{--            <div class="overflow-hidden">--}}
{{--                <img src="{{ Vite::image('showcase8.jpg')}}" class="w-full h-full object-cover">--}}
{{--            </div>--}}
{{--            <!-- Voeg meer afbeeldingen toe zoals nodig -->--}}
{{--        </div>--}}



    </div>
</div>
