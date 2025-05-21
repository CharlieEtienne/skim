<!-- Features 1 -->
<section
    x-data="{
        active: 0,
        features: {{ json_encode($features) }}
    }"
    class="relative py-12 md:py-24"
>
    <div class="container px-4 mx-auto">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/2 lg:w-5/12 px-4 mb-20 lg:mb-0">
                <div class="max-w-xs mb-10"><span class="inline-flex items-center h-6 mb-4 px-2 text-sm uppercase font-medium text-yellowGreen-700 bg-yellowGreen-200 rounded-full">Feature</span>
                    <h2 class="font-heading tracking-tight text-4xl sm:text-5xl font-bold mb-4">{{ $title ?? false }}</h2>
                    <p class="text-gray-700 mb-10">{{ $subtitle ?? false }}</p>
                    <ul>

                        @foreach($features ?? [] as $key => $feature)
                            <li
                                @click="active={{ $key }}"
                                class="flex mb-5 items-center cursor-pointer">
                                <div
                                    class="flex items-center justify-center w-8 h-8 mr-3 p-px rounded-full"
                                    :class="active == '{{ $key }}' ? 'bg-gradient-to-br from-cyanGreen-800 to-cyan-800' : 'bg-gradient-to-br from-gray-200 to-gray-200'"

                                >
                                    <div
                                        class="flex items-center justify-center bg-white h-full w-full rounded-full p-1"
                                        :style="active == '{{ $key }}' ? 'color: #ADE448;' : 'color:#6D7F73;'"
                                    >
                                        <i data-feather="{{ data_get($feature, 'icon', 'activity') }}"></i>
                                    </div>
                                </div>
                                <span :class="active == '{{ $key }}' ? 'font-semibold' : 'text-gray-500'">{{ data_get($feature, 'title', 'High experience') }}</span>
                            </li>
                        @endforeach

                    </ul>

                </div>

                <a
                    class="xs:flex-shrink-0 group relative w-full xs:w-auto h-12 flex xs:inline-flex items-center justify-center px-5 font-bold text-gray-700 bg-white border border-gray-200 hover:border-yellowGreen-600 shadow-md hover:shadow-none rounded-lg transition-all duration-300 focus:outline-none"
                    href="{{ $button_link ?? '#' }}"
                >
                    <div class="absolute top-0 left-0 w-full h-full rounded-lg ring ring-gray-100 animate-pulse group-hover:ring-0 transition duration-300"></div>
                    <span class="mr-2">{{ $button_text ?? 'Learn More' }}</span>
                    <span class="transform group-hover:translate-x-1 transition duration-300">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.5 5L12.5 10L7.5 15" stroke="#3B5444" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </a>

            </div>
            <div class="w-full md:w-1/2 lg:w-7/12 px-4">
                @foreach($features ?? [] as $key => $feature)
                    <div x-cloak x-show="active == '{{ $key }}'">
                        <div class="flex items-start max-w-xl mb-12">
                            <div class="flex-shrink-0 flex items-center justify-center w-8 h-8 mr-6 p-px rounded-full bg-gradient-to-br from-cyanGreen-800 to-cyan-800">
                                <div
                                    class="flex items-center justify-center bg-white h-full w-full rounded-full p-1"
                                    :style="active == '{{ $key }}' ? 'color: #ADE448;' : 'color:#6D7F73;'"
                                >
                                    <i data-feather="{{ data_get($feature, 'icon', 'activity') }}"></i>
                                </div>
                            </div>
                            <div>
                                <h5 class="text-lg font-semibold mb-1">{{ data_get($feature, 'title', 'High experience') }}</h5>
                                <p class="text-gray-500">{{ data_get($feature, 'description', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.') }}</p>
                            </div>
                        </div>
                        <div>
                            <img class="block" src="/storage/{{ data_get($feature, 'image', '') }}" alt="">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
