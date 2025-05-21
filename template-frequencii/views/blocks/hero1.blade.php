<!-- Hero 1 -->
<section>
    <div class="container px-4 mx-auto">
        <div class="relative py-16 pb-40 md:pb-72 px-2 xs:px-8 rounded-3xl overflow-hidden">

            <img class="absolute top-0 left-0 w-full h-full object-cover" src="/skim-templates/frequencii/image/bg-gray-plate.png" alt=""/>

            <div class="relative max-w-lg lg:max-w-3xl mb-14 mx-auto text-center">
                <div class="max-w-lg md:max-w-2xl px-4 mx-auto">

                    <h1 class="font-heading tracking-tight text-4xl sm:text-5xl lg:text-6xl font-bold mb-6">{{ $title ?? '' }}</h1>

                    <p class="max-w-lg mx-auto text-lg text-gray-700 mb-10">{{ $subtitle ?? '' }}</p>

                    @if($top_button_text ?? false)
                        <a
                            class="group relative flex xs:inline-flex items-center justify-center px-5 h-12 font-bold text-white bg-gradient-to-br from-cyanGreen-800 to-cyan-800 rounded-lg transition-all duration-300"
                            href="{{ $top_button_link ?? '#' }}">
                            <div class="absolute top-0 left-0 w-full h-full rounded-lg ring-4 ring-green-300 animate-pulse group-hover:ring-0 transition duration-300"></div>
                            <span>{{ $top_button_text ?? 'Get Started' }}</span>
                        </a>
                    @endif

                </div>
            </div>
        </div>

        <img class="relative block mx-auto px-12 lg:px-8 -mt-40 md:-mt-64" src="/storage/{{ $main_image ?? '' }}" alt=""/>

    </div>
</section>
