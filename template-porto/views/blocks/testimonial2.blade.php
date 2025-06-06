<!-- Testimonial 2 -->
<section class="py-10 md:py-16">

    <div class="container max-w-screen-xl mx-auto px-4">

        <h1 class="font-medium text-gray-700 text-3xl md:text-4xl mb-5">{{ $title ?? 'Testimonial' }}</h1>

        <p class="font-normal text-gray-500 text-xs md:text-base mb-10 md:mb-20">{{ $subtitle ?? 'Below is a summary of the places I studied' }}</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($testimonials ?? [] as $testimonial)
                <div class="bg-gray-50 px-8 py-10 rounded-md">
                    <p class="font-normal text-gray-500 text-md mb-4">
                        {{ data_get($testimonial, 'testimonial_text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.') }}
                    </p>
                    <h6 class="font-semibold text-gray-500 text-md">

                        {{ data_get($testimonial, 'author_name') ?? 'Stephan Clark' }}

                        <span class="font-medium text-gray-300 text-sm">
                            - {{ data_get($testimonial, 'author_title', 'CEO at EarlyBird') }}
                        </span>
                    </h6>
                </div>
            @endforeach
        </div>

    </div>

</section>
