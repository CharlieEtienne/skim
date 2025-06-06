<!-- Hero 1 -->
<section class="py-10 md:py-16">

    <div class="container max-w-screen-xl mx-auto px-4">

        <nav class="flex items-center justify-between mb-40">
            <img
                src="/storage/{{ $logo ?? '' }}"
                alt="Logo"
                style="max-width: 320px; max-height: 80px;"
            >

            @if($top_button_text ?? false)
                <button
                    class="px-7 py-3 md:px-9 md:py-4 bg-white font-medium md:font-semibold text-gray-700 text-md rounded-md hover:bg-gray-700 hover:text-white transition ease-linear duration-500"
                >
                    {{ $top_button_text ?? 'Get get my CV' }}
                </button>
            @endif
        </nav>

        <div class="text-center">
            <div class="flex justify-center mb-16">
                <img src="/storage/{{ $main_image ?? '' }}" alt="Image">
            </div>

            <h6 class="font-medium text-gray-600 text-lg md:text-2xl uppercase mb-8">
                {{ $pre_title ?? '' }}
            </h6>

            <h1 class="font-normal text-gray-900 text-4xl md:text-7xl leading-none mb-8">
                {{ $title ?? '' }}
            </h1>

            <p class="font-normal text-gray-600 text-md md:text-xl mb-16">
                {{ $subtitle ?? '' }}
            </p>

            <a href="#" class="px-7 py-3 md:px-9 md:py-4 font-medium md:font-semibold bg-gray-700 text-gray-50 text-sm rounded-md hover:bg-gray-50 hover:text-gray-700 transition ease-linear duration-500">
                {{ $bottom_button_text ?? 'Get in touch' }}
            </a>
        </div>

    </div>

</section>
