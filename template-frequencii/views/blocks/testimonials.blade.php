<section class="py-12 md:py-24">
    <div class="container px-4 mx-auto">
        <div class="max-w-7xl mx-auto">
            <div class="max-w-2xl mx-auto mb-20 text-center">
                <span class="inline-flex items-center h-6 mb-6 px-2 text-xs uppercase font-medium text-yellowGreen-700 bg-yellowGreen-200 rounded-full">{{ $badge ?? 'Testimonials' }}</span>
                <h1 class="font-heading tracking-tight text-4xl sm:text-5xl font-bold">{{ $title ?? false }}</h1>
            </div>
            <div class="flex flex-wrap -mx-4">
                @foreach($testimonials ?? [] as $testimonial)
                    <div class="w-full lg:w-1/3 px-4 mb-10 lg:mb-0">
                        <div class="flex flex-col max-w-sm mx-auto lg:max-w-none items-start h-full p-8 border border-gray-100 rounded-xl shadow-4xl">
                            <img class="block h-8 mb-8" src="/storage/{{ data_get($testimonial, 'logo', '') }}" alt="">
                            <div class="pr-4">
                                <p class="text-lg font-medium mb-20">“{{ data_get($testimonial, 'testimonial', '') }}”</p>
                                <div class="flex items-center mt-auto">
                                    <img class="block h-12 w-12 rounded-full" src="/storage/{{ data_get($testimonial, 'avatar', '') }}" alt="">
                                    <div class="pl-4">
                                        <span class="block font-semibold">{{ data_get($testimonial, 'author', '') }}</span>
                                        <span class="text-sm text-gray-500">{{ data_get($testimonial, 'title', '') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
