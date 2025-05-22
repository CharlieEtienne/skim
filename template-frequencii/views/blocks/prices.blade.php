<!-- Prices -->
<section
    class="py-12 md:py-24"
    x-data="{
        frequency: 'monthly',
    }"
>
    <div class="container px-4 mx-auto">
        <div class="max-w-md lg:max-w-6xl mx-auto">
            <div class="flex flex-wrap items-end -mx-4 mb-24">
                <div class="w-full lg:w-1/2 px-4 mb-10 lg:mb-0">
                    <div class="max-w-sm sm:max-w-md">
                        <h1 class="font-heading tracking-tight text-4xl sm:text-5xl font-semibold mb-4">{{ $title ?? false }}</h1>
                        <p class="text-lg text-gray-500">{{ $subtitle ?? false }}</p>
                    </div>
                </div>
                @if($frequency ?? false)
                    <div class="w-full lg:w-1/2 px-4">
                        <div class="flex justify-end">
                            <div class="inline-flex items-center p-1 bg-gray-50 rounded-lg gap-1">
                                <button
                                    class="inline-block px-4 py-2.5 text-sm rounded-lg border "
                                    :class="frequency == 'monthly' ? 'font-medium text-gray-900 bg-white border-gray-100' : 'text-gray-500 bg-transparent border-transparent'"
                                    @click="frequency = 'monthly'"
                                >{{ $monthly_label ?? 'Monthly' }}</button>
                                <button
                                    class="inline-block px-4 py-2.5 text-sm rounded-lg border "
                                    :class="frequency == 'annual' ? 'font-medium text-gray-900 bg-white border-gray-100' : 'text-gray-500 bg-transparent border-transparent'"
                                    @click="frequency = 'annual'"
                                >{{ $annually_label ?? 'Annually' }}</button>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            <div class="flex flex-wrap -mx-4">
                @foreach($plans ?? [] as $plan)
                    <div class="w-full lg:w-1/3 px-4 mb-8 lg:mb-0">
                        <div class="relative p-8 border border-gray-100 rounded-xl shadow-xl @if(data_get($plan, 'featured') ?? false) bg-teal-900 text-white @else bg-white @endif">

                            @if(data_get($plan, 'featured') ?? false)
                                <span class="absolute top-0 right-0 m-8 inline-block px-2 py-px text-xs text-white bg-teal-800 rounded-full">
                                    {{ data_get($plan, 'featured_badge', 'Most Popular') ?? 'Most Popular' }}
                                </span>
                            @endif

                            <h5 class="text-xl font-medium mb-4">
                                {{ data_get($plan, 'name') }}
                            </h5>

                            <span
                                x-show="frequency == 'monthly'"
                                class="block mb-2 text-3xl font-semibold tracking-tighter">
                                {{ data_get($plan, 'monthly_price') }}
                            </span>

                            <span
                                x-show="frequency == 'monthly'"
                                class="block mb-6 @if(data_get($plan, 'featured') ?? false) text-gray-400 @else text-gray-500 @endif">
                                {{ data_get($plan, 'monthly_description', 'per month') ?? 'per month' }}
                            </span>

                            @if($frequency ?? false)
                                <span
                                    x-show="frequency == 'annual'"
                                    class="block mb-2 text-3xl font-semibold tracking-tighter">
                                    {{ data_get($plan, 'annual_price') }}
                                </span>

                                <span
                                    x-show="frequency == 'annual'"
                                    class="block mb-6 @if(data_get($plan, 'featured') ?? false) text-gray-400 @else text-gray-500 @endif">
                                    {{ data_get($plan, 'annual_description', 'per year') ?? 'per year' }}
                                </span>
                            @endif

                            @if(data_get($plan, 'featured') ?? false)
                                <a
                                    class="group relative w-full h-12 mb-8 flex items-center justify-center px-5 p-px font-bold text-gray-900 bg-yellowGreen-600 rounded-lg transition-all duration-300"
                                    href="{{ data_get($plan, 'button_link', '#') ?? '#' }}"
                                >
                                    <div class="absolute top-0 left-0 w-full h-full rounded-lg ring ring-yellowGreen-900 animate-pulse group-hover:ring-0 transition duration-300"></div>
                                    <span>{{ data_get($plan, 'button_text', 'Get Started') ?? 'Get Started' }}</span>
                                </a>
                            @else
                                <a
                                    class="flex items-center justify-center w-full h-12 px-4 mb-8 text-center text-base text-gray-700 hover:text-yellowGreen-700 font-bold border border-gray-200 hover:border-yellowGreen-600 shadow-sm hover:shadow-none rounded-lg transition duration-200"
                                    href="{{ data_get($plan, 'button_link', '#') ?? '#' }}">
                                    {{ data_get($plan, 'button_text', 'Get Started') ?? 'Get Started' }}
                                </a>
                            @endif

                                <span class="block mb-4 text-sm font-semibold">
                                {{ data_get($plan, 'features_heading', 'What’s included') ?? 'What’s included' }}
                            </span>

                            <ul>
                                @foreach($plan['features'] ?? [] as $feature)
                                    <li class="flex items-center mb-4">
                                        <div class="flex items-center justify-center w-5 h-5 mr-3 bg-gray-50 rounded-full">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.5917 6.00822C15.5142 5.93011 15.4221 5.86811 15.3205 5.82581C15.219 5.7835 15.11 5.76172 15 5.76172C14.89 5.76172 14.7811 5.7835 14.6796 5.82581C14.578 5.86811 14.4858 5.93011 14.4084 6.00822L8.20004 12.2249L5.59171 9.60822C5.51127 9.53052 5.41632 9.46942 5.31227 9.42842C5.20823 9.38742 5.09713 9.36731 4.98531 9.36924C4.87349 9.37118 4.76315 9.39512 4.66058 9.4397C4.55802 9.48427 4.46524 9.54862 4.38754 9.62905C4.30984 9.70949 4.24875 9.80444 4.20774 9.90848C4.16674 10.0125 4.14663 10.1236 4.14856 10.2354C4.1505 10.3473 4.17444 10.4576 4.21902 10.5602C4.2636 10.6627 4.32794 10.7555 4.40837 10.8332L7.60837 14.0332C7.68584 14.1113 7.77801 14.1733 7.87956 14.2156C7.98111 14.2579 8.09003 14.2797 8.20004 14.2797C8.31005 14.2797 8.41897 14.2579 8.52052 14.2156C8.62207 14.1733 8.71424 14.1113 8.79171 14.0332L15.5917 7.23322C15.6763 7.15518 15.7438 7.06047 15.79 6.95506C15.8361 6.84964 15.86 6.7358 15.86 6.62072C15.86 6.50563 15.8361 6.3918 15.79 6.28638C15.7438 6.18096 15.6763 6.08625 15.5917 6.00822V6.00822Z" fill="#041109"></path>
                                            </svg>
                                        </div>
                                        <span>{{ $feature }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
