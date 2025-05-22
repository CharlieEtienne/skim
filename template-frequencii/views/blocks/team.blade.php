<section class="relative py-12 md:py-24">
    <img class="absolute top-0 right-0" src="/skim-templates/frequencii/image/shadow-green.png" alt="">
    <div class="relative container px-4 mx-auto">
        <h1 class="font-heading tracking-tight text-4xl sm:text-5xl font-bold mb-4">{{ $title ?? false }}</h1>
        <p class="text-lg text-gray-500 mb-20">{{ $subtitle ?? false }}</p>
        <div class="flex flex-wrap -mx-4 -mb-8">
            @foreach($team_members ?? [] as $member)
                <div class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4 px-4 mb-8">
                    <div class="p-8 bg-white border-2 border-gray-100 rounded-xl">
                        <img class="block h-36 w-36 mb-8 mx-auto rounded-full object-cover" src="/storage/{{ data_get($member, 'avatar', '') }}" alt="">
                        <div class="text-center"><span class="block text-2xl font-bold mb-2">{{ data_get($member, 'name', '') }}</span>
                            <span class="block text-lg text-gray-700 font-medium">{{ data_get($member, 'title', '') }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
