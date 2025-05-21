<!-- Features 2 -->
<section class="py-10 md:py-16">

    <div class="container max-w-screen-xl mx-auto px-4">

        <h1 class="font-medium text-gray-700 text-3xl md:text-4xl mb-5">{{ $section_title ?? 'Education' }}</h1>

        <p class="font-normal text-gray-500 text-xs md:text-base mb-20">{{ $section_subtitle ?? 'Below is a summary of the places I studied' }}</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($features ?? [] as $feature)
                <div class="bg-gray-50 px-8 py-10 rounded-md">
                    <h4 class="font-medium text-gray-700 text-lg mb-4">{{ data_get($feature, 'year', '2015 – 2016') }}</h4>

                    <p class="font-normal text-gray-500 text-md mb-4">{{ data_get($feature, 'description', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.') }}</p>

                    <div class="relative">
                        <a
                            href="{{ data_get($feature, 'link_target') }}"
                            @if(data_get($feature, 'open_in_new_tab'))
                                target="_blank"
                            @endif
                            class="font-semibold text-gray-500 text-md relative z-10"
                        >
                            {{ data_get($feature, 'link_text', 'See the place here') }}
                        </a>
                        <span class="w-32 h-1 bg-blue-200 absolute bottom-1 left-0 z-0"></span>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

</section>
