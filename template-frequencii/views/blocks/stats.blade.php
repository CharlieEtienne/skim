<section class="py-12 md:py-24">
    <div class="container px-4 mx-auto">
        <div class="text-center mb-20">
            <h3 class="font-heading tracking-tight text-4xl md:text-5xl font-bold">{{ $title ?? false }}</h3>
        </div>
        <div class="flex flex-wrap -mx-4">
            @foreach($stats ?? [] as $stat)
                <div class="w-full xs:w-1/2 md:w-1/3 px-4 mb-10">
                    <div class="max-w-xs mx-auto text-center">
                        <span class="block mb-4 text-4xl font-bold">{{ data_get($stat, 'prefix', '') }}{{ data_get($stat, 'number', '') }}{{ data_get($stat, 'suffix', '') }}</span>
                        <span class="text-lg text-gray-500">{{ data_get($stat, 'description', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.') }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
