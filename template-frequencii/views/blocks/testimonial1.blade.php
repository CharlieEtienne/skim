<!-- Testimonial 1 -->
<section class="py-10 md:py-16">

    <div class="container max-w-screen-xl mx-auto px-4">

        <h1 class="font-medium text-gray-700 text-3xl md:text-4xl mb-5">{{ $title ?? 'Brands' }}</h1>

        <p class="font-normal text-gray-500 text-xs md:text-base mb-10 md:mb-20">{{ $subtitle ?? 'Below is a summary of the places I studied' }}</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            <img src="{{ $brand_image_1 ?? false ? '/storage/' . $brand_image_1 : '/skim-templates/frequencii/image/brand-1.png' }}" alt="Brand Image 1">

            <img src="{{ $brand_image_2 ?? false ? '/storage/' . $brand_image_2 : '/skim-templates/frequencii/image/brand-2.png' }}" alt="Brand Image 2">

            <img src="{{ $brand_image_3 ?? false ? '/storage/' . $brand_image_3 : '/skim-templates/frequencii/image/brand-3.png' }}" alt="Brand Image 3">

            <img src="{{ $brand_image_4 ?? false ? '/storage/' . $brand_image_4 : '/skim-templates/frequencii/image/brand-4.png' }}" alt="Brand Image 4">

            <img src="{{ $brand_image_5 ?? false ? '/storage/' . $brand_image_5 : '/skim-templates/frequencii/image/brand-5.png' }}" alt="Brand Image 5">

            <img src="{{ $brand_image_6 ?? false ? '/storage/' . $brand_image_6 : '/skim-templates/frequencii/image/brand-6.png' }}" alt="Brand Image 6">
        </div>

    </div>

</section>
