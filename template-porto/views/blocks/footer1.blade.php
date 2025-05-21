<footer class="py-10 md:py-16 mb-20 md:mb-40 lg::mb-52">

    <div class="container max-w-screen-xl mx-auto px-4">
        <div class="text-center">
            <h1 class="font-medium text-gray-700 text-4xl md:text-5xl mb-5">{{ $title ?? 'Testimonial' }}</h1>

            <p class="font-normal text-gray-400 text-md md:text-lg mb-20">{{ $subtitle ?? 'I\'m not currently taking on new client work but feel free to contact me for any other inquiries.' }}</p>

            <div class="flex items-center justify-center space-x-8">
                @foreach($socials ?? [] as $social)
                    <a href="{{ data_get($social, 'url') ?? '#' }}" class="w-16 h-16 flex items-center justify-center rounded-full hover:bg-gray-200 transition ease-in-out duration-500">
                        <i data-feather="{{ data_get($social, 'icon') ?? 'twitter' }}" class="text-gray-500 hover:text-gray-800 transition ease-in-out duration-500"></i>
                    </a>
                @endforeach
            </div>

        </div>
    </div>

</footer>
