<!-- Showcase 1 -->
<section class="py-10 md:py-16">

    <div class="container max-w-screen-xl mx-auto px-4">

        <div class="flex flex-col lg:flex-row justify-between">
            <div class="mb-10 lg:mb-0">
                <h1 class="font-medium text-gray-700 text-3xl md:text-4xl mb-5">{{ $section_title ?? 'Portfolio' }}</h1>

                <p class="font-normal text-gray-500 text-xs md:text-base">{{ $section_subtitle ?? 'I have brought here my biggest and favorite works as a professional.' }}</p>
            </div>

            <div class="space-y-24">
                <div class="flex space-x-6">
                    <h1 class="font-normal text-gray-700 text-3xl md:text-4xl">{{ $showcase1_number ?? '01' }}</h1>

                    <span class="w-28 h-0.5 bg-gray-300 mt-5"></span>

                    <div>
                        <h1 class="font-normal text-gray-700 text-3xl md:text-4xl mb-5">{{ $showcase1_title ?? 'Demo API Generator' }}</h1>

                        <p class="font-normal text-gray-500 text-sm md:text-base">{{ $showcase1_description ?? 'A dummy data free and documented API generator to facilitate the process of testing the front-end portion of projects.' }}</p>
                    </div>
                </div>

                <div class="flex space-x-6">
                    <h1 class="font-normal text-gray-700 text-3xl md:text-4xl">{{ $showcase2_number ?? '02' }}</h1>

                    <span class="w-28 h-0.5 bg-gray-300 mt-5"></span>

                    <div>
                        <h1 class="font-normal text-gray-700 text-3xl md:text-4xl mb-5">{{ $showcase2_title ?? 'Demo API Generator' }}</h1>

                        <p class="font-normal text-gray-500 text-sm md:text-base">{{ $showcase2_description ?? 'A dummy data free and documented API generator to facilitate the process of testing the front-end portion of projects.' }}</p>
                    </div>
                </div>

                <div class="flex space-x-6">
                    <h1 class="font-normal text-gray-700 text-3xl md:text-4xl">{{ $showcase3_number ?? '03' }}</h1>

                    <span class="w-28 h-0.5 bg-gray-300 mt-5"></span>

                    <div>
                        <h1 class="font-normal text-gray-700 text-3xl md:text-4xl mb-5">{{ $showcase3_title ?? 'Demo API Generator' }}</h1>

                        <p class="font-normal text-gray-500 text-sm md:text-base">{{ $showcase3_description ?? 'A dummy data free and documented API generator to facilitate the process of testing the front-end portion of projects.' }}</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
