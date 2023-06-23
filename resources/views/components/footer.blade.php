<footer>
    <div class="py-20 bg-[#121212]">
        <div class="flex flex-col gap-6 justify-between sm:flex-row mx-10 text-white">
            <div class="">
                <a href="/">
{{--                    <img class="h-9 w-auto mx-auto mb-6 sm:mb-0 shrink-0" src="{{ Vite::image('vistron-logo.svg') }}" alt="Your Company">--}}
                </a>
            </div>
            <div class="flex flex-col sm:flex-row gap-6 sm:gap-12 md:gap-20 text-center sm:text-left text-white">
                <p class="flex justify-center text-lg font-regular mb-2 sm:hidden text-white uppercase">Snelle links</p>

            </div>
        </div>
        <div class="flex justify-center">
            <div class="flex flex-col">
                <p class="mr-1 mb-4 text-center text-2xl font-[600] text-white inline-flex">Laten we samen werken.</p>
                <a href="#" class="mr-1 text-center text-[#15ED92] font-[600] text-2xl font-bold inline-flex underline justify-center">Neem contact op.</a>
            </div>
        </div>
    </div>
    <div class="py-12 bg-[#2F2F2F]">
        <div class="flex justify-center">
            <span class="mr-1 text-center text-gray-400 text-xs md:text-base inline-flex">&copy; {{ date('Y') }} - {{ config('app.name') }} | Gerealiseerd door </span><span class="inline-flex"><a href="https://uteq.nl" target="_blank" class="underline text-gray-400 md:text-base text-xs">Uteq.nl</a></span>
        </div>
    </div>
</footer>
