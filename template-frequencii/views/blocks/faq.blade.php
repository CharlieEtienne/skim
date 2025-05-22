<!-- FAQ -->
<section class="relative py-12 md:py-24">
    <div class="container px-4 mx-auto">
        <div class="text-center mb-20">
            <h1 class="font-heading tracking-tight text-4xl sm:text-5xl font-semibold mb-6">{{ $title ?? 'Frequently asked questions' }}</h1>
            <p class="text-gray-500">{{ $subtitle ?? 'Everything you need to know about the product.' }}</p>
        </div>
        <div class="flex flex-wrap -mx-4 lg:-mx-12 -mb-16">
            @foreach($questions ?? [] as $question)
                <div class="w-full xs:w-1/2 md:w-1/3 px-4 lg:px-12 mb-16">
                    <div class="max-w-sm">
                        <h6 class="text-xl font-semibold mb-1">{{ data_get($question, 'question', '') }}</h6>
                        <p class="text-gray-500">{{ data_get($question, 'answer', '') }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        @if($cta['active'] ?? false)
            <!-- Get in touch -->
            <div class="mt-16 py-4 px-6 border border-gray-100 rounded-xl">
                <div class="sm:flex items-center">
                    <div class="xs:flex mb-6 md:mb-0 items-center">
                        <div class="flex-shrink-0 flex items-center">
                            <div class="inline-flex items-center justify-center p-1 bg-white rounded-full">
                                <div class="inline-flex items-center justify-center w-14 h-14 bg-yellowGreen-200 rounded-full">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 10L12 10L16 10" stroke="#041109" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M8 14L10 14L12 14" stroke="#041109" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 13.8214 2.48697 15.5291 3.33782 17L2.5 21.5L7 20.6622C8.47087 21.513 10.1786 22 12 22Z" stroke="#041109" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                            </div>
                            @if($cta['avatar'] ?? false)
                                <div class="-ml-4 inline-flex items-center justify-center p-1 bg-white rounded-full">
                                    <img class="block w-14 h-14" src="/storage/{{ data_get($cta, 'avatar', '') }}" alt="">
                                </div>
                            @endif
                        </div>
                        <div class="mt-6 md:mt-0 xs:ml-6">
                            <h6 class="font-semibold mb-1">{{ data_get($cta, 'title', 'Still have questions?') }}</h6>
                            <p class="text-sm text-gray-500">{{ data_get($cta, 'subtitle', 'Can’t find the answer you’re looking for? Please chat to our team.') }}</p>
                        </div>
                    </div>
                    <div class="flex-shrink-0 ml-auto sm:pl-4 text-right">
                        <a
                            class="group relative flex items-center justify-center px-5 h-12 sm:inline-flex text-base font-semibold text-white bg-gradient-to-br from-cyanGreen-800 to-cyan-800 rounded-lg transition-all duration-300"
                            href="{{ data_get($cta, 'button_link', '#') }}"
                        >
                            <span class="mr-2">{{ data_get($cta, 'button_text', '#') }}</span>
                            <span class="transform group-hover:translate-x-1 transition duration-200">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.00033 10H15.417M15.417 10L10.417 5M15.417 10L10.417 15" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        @endif
    </div>
</section>
