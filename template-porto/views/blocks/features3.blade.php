<section class="py-10 md:py-16">
    <div class="container max-w-screen-xl mx-auto px-4">

        <h1 class="font-medium text-gray-700 text-3xl md:text-4xl mb-5">{{ $section_title ?? 'Experience' }}</h1>

        <p class="font-normal text-gray-500 text-xs md:text-base mb-20">{{ $section_subtitle ?? 'Below is a summary of the places I studied' }}</p>

        <div class="flex flex-col lg:flex-row justify-between">
            <div class="space-y-8 md:space-y-16 mb-16 md:mb-0">
                <h6 class="font-medium text-gray-400 text-base uppercase">{{ $column1_header ?? 'Company' }}</h6>

                <p class="font-semibold text-gray-600 text-base">{{ $row1_company ?? 'Massa Fames' }} <span class="font-normal text-gray-300">/ {{ $row1_location ?? 'New York' }}</span></p>

                <p class="font-semibold text-gray-600 text-base">{{ $row2_company ?? 'Massa Fames' }} <span class="font-normal text-gray-300">/ {{ $row2_location ?? 'New York' }}</span></p>

                <p class="font-semibold text-gray-600 text-base">{{ $row3_company ?? 'Massa Fames' }} <span class="font-normal text-gray-300">/ {{ $row3_location ?? 'New York' }}</span></p>

                <p class="font-semibold text-gray-600 text-base">{{ $row4_company ?? 'Massa Fames' }} <span class="font-normal text-gray-300">/ {{ $row4_location ?? 'New York' }}</span></p>

                <p class="font-semibold text-gray-600 text-base">{{ $row5_company ?? 'Massa Fames' }} <span class="font-normal text-gray-300">/ {{ $row5_location ?? 'New York' }}</span></p>
            </div>

            <div class="space-y-8 md:space-y-16 mb-16 md:mb-0">
                <h6 class="font-medium text-gray-400 text-base uppercase">{{ $column2_header ?? 'Position' }}</h6>

                <p class="font-normal text-gray-400 text-base">{{ $row1_position ?? 'Junior Front-End Developer' }}</p>

                <p class="font-normal text-gray-400 text-base">{{ $row2_position ?? 'Junior Front-End Developer' }}</p>

                <p class="font-normal text-gray-400 text-base">{{ $row3_position ?? 'Junior Front-End Developer' }}</p>

                <p class="font-normal text-gray-400 text-base">{{ $row4_position ?? 'Junior Front-End Developer' }}</p>

                <p class="font-normal text-gray-400 text-base">{{ $row5_position ?? 'Junior Front-End Developer' }}</p>
            </div>

            <div class="space-y-8 md:space-y-16">
                <h6 class="font-medium text-gray-400 text-base uppercase">{{ $column3_header ?? 'Year' }}</h6>

                <p class="font-normal text-gray-400 text-base">{{ $row1_year ?? '2016' }}</p>

                <p class="font-normal text-gray-400 text-base">{{ $row2_year ?? '2016' }}</p>

                <p class="font-normal text-gray-400 text-base">{{ $row3_year ?? '2016' }}</p>

                <p class="font-normal text-gray-400 text-base">{{ $row4_year ?? '2016' }}</p>

                <p class="font-normal text-gray-400 text-base">{{ $row5_year ?? '2016' }}</p>
            </div>
        </div>
    </div>
</section>
