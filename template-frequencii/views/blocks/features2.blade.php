<!-- Features 2 -->
<section class="py-12 md:py-24">
    <div class="container px-4 mx-auto">
        <div>
            <div class="max-w-2xl mx-auto mb-24 text-center">
                <h1 class="font-heading tracking-tight text-4xl sm:text-5xl font-bold mb-4">{{ $title ?? false }}</h1>
                <p class="text-gray-500">{{ $subtitle ?? false }}</p>
            </div>
            <div class="flex flex-wrap -mx-4 -mb-16">
                @foreach($features ?? [] as $feature)
                    <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-16">
                    <div class="max-w-xs lg:px-4 mx-auto text-center">
                        <div class="flex items-center justify-center w-16 h-16 mx-auto rounded-full bg-gray-50">
                            <i data-feather="{{ data_get($feature, 'icon', 'activity') }}"></i>
                        </div>
                        <div class="mt-3">
                            <h5 class="text-xl font-bold mb-1">{{ data_get($feature, 'title', 'High experience') }}</h5>
                            <p class="text-lg text-gray-500">{{ data_get($feature, 'description', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.') }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
