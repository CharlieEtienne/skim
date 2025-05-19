<!-- Features 1 -->
<section class="py-10 md:py-16">

    <div class="container max-w-screen-xl mx-auto px-4">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($features ?? [] as $feature)
                <div class="bg-gray-50 px-8 py-10 rounded-md">
                    <div class="w-20 py-6 flex justify-center bg-gray-100 rounded-md mb-4">
                        <i data-feather="{{ data_get($feature, 'icon', 'activity') }}"></i>
                    </div>

                    <h4 class="font-medium text-gray-700 text-lg mb-4">{{ data_get($feature, 'title', 'High experience') }}</h4>

                    <p class="font-normal text-gray-500 text-md">{{ data_get($feature, 'description', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.') }}</p>
                </div>
            @endforeach
        </div>

    </div>

</section>
