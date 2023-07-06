<div id="showroom" class="bg-[#000000] relative">
    <div class="absolute bottom-0 right-0 text-neutral-800 uppercase font-[600] text-[10rem]">
        SHOWROOM
    </div>
    <div class="absolute top-0 left-1/2 right-1/2">
    </div>
    <div data-aos="fade-up" data-aos-delay="50" class="relative max-w-6xl mx-auto pt-20 pb-40" x-data="{ show : 'cat1' }">
        <span class="text-gray-200 flex justify-center pb-20">Meer foto's bekijken?<a href="#" class="text-[#15ED92]">@zhino_designs instagram</a></span>

        <div class="flex mb-20 justify-center gap-20">
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

{{--        Signage--}}
        <div x-transition x-show="show === 'cat1'" x-cloak class="grid grid-cols-3 gap-4">
            <div class="overflow-hidden">
                <img src="{{ Vite::image('showcase1.jpg')}}" class="w-full h-full object-cover">
            </div>
            <div class="overflow-hidden">
                <img src="{{ Vite::image('showcase2.jpg')}}" class="w-full h-full object-cover">
            </div>
            <div class="overflow-hidden">
                <img src="{{ Vite::image('showcase3.webp')}}" class="w-full h-full object-cover">
            </div>
            <div class="overflow-hidden">
                <img src="{{ Vite::image('showcase8.jpg')}}" class="w-full h-full object-cover">
            </div>
            <div class="overflow-hidden">
                <img src="{{ Vite::image('showcase4.jpg')}}" class="w-full h-full object-cover">
            </div>
            <div class="overflow-hidden">
                <img src="{{ Vite::image('showcase1.jpg')}}" class="w-full h-full object-cover">
            </div>
            <!-- Voeg meer afbeeldingen toe zoals nodig -->
        </div>

{{--            Vehicle Graphics--}}
        <div x-transition x-show="show === 'cat2'" x-cloak class="grid grid-cols-3 gap-4">
            <div class="overflow-hidden">
                <img src="{{ Vite::image('showcase5.jpg')}}" class="w-full h-full object-cover">
            </div>
            <div class="overflow-hidden">
                <img src="{{ Vite::image('showcase6.jpg')}}" class="w-full h-full object-cover">
            </div>
            <div class="overflow-hidden">
                <img src="{{ Vite::image('showcase7.jpg')}}" class="w-full h-full object-cover">
            </div>
            <div class="overflow-hidden">
                <img src="{{ Vite::image('showcase8.jpg')}}" class="w-full h-full object-cover">
            </div>
            <div class="overflow-hidden">
                <img src="{{ Vite::image('showcase4.jpg')}}" class="w-full h-full object-cover">
            </div>
            <div class="overflow-hidden">
                <img src="{{ Vite::image('showcase1.jpg')}}" class="w-full h-full object-cover">
            </div>
            <!-- Voeg meer afbeeldingen toe zoals nodig -->
        </div>

{{--            Stickering--}}
        <div x-transition x-show="show === 'cat3'" x-cloak class="grid grid-cols-3 gap-4">
            <div class="overflow-hidden">
                <img src="{{ Vite::image('showcase1.jpg')}}" class="w-full h-full object-cover">
            </div>
            <div class="overflow-hidden">
                <img src="{{ Vite::image('showcase4.jpg')}}" class="w-full h-full object-cover">
            </div>
            <div class="overflow-hidden">
                <img src="{{ Vite::image('showcase1.jpg')}}" class="w-full h-full object-cover">
            </div>
            <div class="overflow-hidden">
                <img src="{{ Vite::image('showcase2.jpg')}}" class="w-full h-full object-cover">
            </div>
            <div class="overflow-hidden">
                <img src="{{ Vite::image('showcase2.jpg')}}" class="w-full h-full object-cover">
            </div>
            <div class="overflow-hidden">
                <img src="{{ Vite::image('showcase4.jpg')}}" class="w-full h-full object-cover">
            </div>
            <!-- Voeg meer afbeeldingen toe zoals nodig -->
        </div>

{{--            Wall Graphics--}}
        <div x-transition x-show="show === 'cat4'" x-cloak class="grid grid-cols-3 gap-4">
            <div class="overflow-hidden">
                <img src="{{ Vite::image('showcase2.jpg')}}" class="w-full h-full object-cover">
            </div>
            <div class="overflow-hidden">
                <img src="{{ Vite::image('showcase4.jpg')}}" class="w-full h-full object-cover">
            </div>
            <div class="overflow-hidden">
                <img src="{{ Vite::image('showcase1.jpg')}}" class="w-full h-full object-cover">
            </div>
            <div class="overflow-hidden">
                <img src="{{ Vite::image('showcase2.jpg')}}" class="w-full h-full object-cover">
            </div>
            <div class="overflow-hidden">
                <img src="{{ Vite::image('showcase4.jpg')}}" class="w-full h-full object-cover">
            </div>
            <div class="overflow-hidden">
                <img src="{{ Vite::image('showcase8.jpg')}}" class="w-full h-full object-cover">
            </div>
            <!-- Voeg meer afbeeldingen toe zoals nodig -->
        </div>



    </div>
</div>
