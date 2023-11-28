<x-layout>

    <a href="#home" class="z-50 fixed bottom-4 right-4 bg-gray-800 p-2 rounded-full text-white">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6">
            <path d="M12 19V5M5 12l7-7 7 7" />
        </svg>
    </a>

{{--    <div>--}}
{{--        <div class="max-w-6xl mx-auto pt-8 px-6 pb-4 md:pb-14 md:mt-10 relative">--}}
{{--            <div class="md:pb-28">--}}
{{--                <h1 class="text-2xl md:text-5xl pb-4 md:pb-8 md:w-5/6 font-[500] text-gray-900">{{ __('messages.title') }}</h1>--}}
{{--                <p class="font-[300] md:w-4/6 leading-7 pb-6">Ontdek de kracht van professionele belettering en grafische diensten bij ZhinoDesigns.--}}
{{--                    Wij bieden de perfecte reclame- en marketingoplossingen om jouw bedrijf te laten groeien.--}}
{{--                </p>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="flex justify-center pb-4">--}}
{{--            <a href="#showroom" class="inline-flex items-center mx-auto gap-2 font-[300] pb-6 text-neutral-600">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M11.25 10a.75.75 0 0 0 1.5 0V7a.75.75 0 0 0-1.5 0v3Z"/><path fill="currentColor" fill-rule="evenodd" d="M18.75 9.074a6.75 6.75 0 0 0-13.5 0v5.852a6.75 6.75 0 0 0 13.5 0V9.074Zm-5.931-5.186a5.25 5.25 0 0 1 4.431 5.186v5.852a5.25 5.25 0 0 1-10.5 0V9.074a5.25 5.25 0 0 1 6.069-5.186Z" clip-rule="evenodd"/></svg>--}}
{{--                Meer Lezen--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div>
        <div class="relative isolate overflow-hidden pt-14">
            <img src="{{ Vite::image('showcase1.webp') }}" alt="" class="absolute brightness-50 inset-0 -z-10 h-full w-full object-cover">
            <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#9BEDCA] to-[#9BEDCA] opacity-20 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
            <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
                <div class="text-center">
                    <h1 class="text-5xl tracking-tight font-medium text-white">ZhinoDesigns. Jouw Partner in
                        Visuele Brilliance!</h1>
                    <p class="mt-6 text-lg leading-8 text-gray-200">Powerful, self-serve product and growth analytics to help you convert, engage, and retain more users. Trusted by over 4,000 startups.</p>
                    <div class="mt-16 flex items-center justify-center gap-x-4">
                       <div class="rounded-full h-4 w-4 border-2 border-white"></div>
                        <div class="rounded-full h-5 w-5 bg-white"></div>
                        <div class="rounded-full h-4 w-4 border-2 border-white"></div>
                        <div class="rounded-full h-4 w-4 border-2 border-white"></div>
                        <div class="rounded-full h-4 w-4 border-2 border-white"></div>
                    </div>
                </div>
            </div>
            <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
                <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#9BEDCA] to-[#9BEDCA] opacity-20 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
        </div>
    </div>

    <section class="bg-white my-20">
        <div class="max-w-6xl mx-auto">
            <div class="pb-10">
                <h2 class="uppercase font-semibold text-3xl text-gray-900 pb-4">Onze producten</h2>
                <p class="text-gray-900 w-2/3 pb-6">Wij hebben een ruim aanbod aan drukwerk diesnten op maat gemaakt, voor jouw benodigheden.
                    Ontdek de mogelijkheden of kom een keer bij ons langs. </p>
                <hr>
            </div>

            <div class="grid grid-rows-2 grid-cols-3 gap-6">
                <div>
                    <div class="relative">
                        <div class="">
                            <img class="rounded-lg" src="{{ Vite::image('showcase2.webp') }}" alt="">
                        </div>
                        <div class="absolute h-12 w-12 bg-primary rounded-full -right-4 -bottom-4">

                        </div>
                    </div>
                    <p class="text-lg font-medium pt-3">Buiten Signage</p>
                </div>
                <div>
                    <div class="relative">
                        <div class="">
                            <img class="rounded-lg" src="{{ Vite::image('showcase2.webp') }}" alt="">
                        </div>
                        <div class="absolute h-12 w-12 bg-primary rounded-full -right-4 -bottom-4">

                        </div>
                    </div>
                    <p class="text-lg font-medium pt-3">Buiten Signage</p>
                </div>

                <div>
                    <div class="relative">
                        <div class="">
                            <img class="rounded-lg" src="{{ Vite::image('showcase2.webp') }}" alt="">
                        </div>
                        <div class="absolute h-12 w-12 bg-primary rounded-full -right-4 -bottom-4">

                        </div>
                    </div>
                    <p class="text-lg font-medium pt-3">Buiten Signage</p>
                </div>



            </div>
        </div>


    </section>

{{--    <x-showroom-section />--}}

{{--    <x-toekomst-section />--}}

{{--    <x-contact />--}}

</x-layout>
