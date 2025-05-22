<section class="py-12 md:py-24">
    <div class="container px-4 mx-auto">
        <div class="max-w-6xl mx-auto">
            <div class="max-w-4xl mb-24"><span class="inline-flex items-center h-6 mb-4 px-2 text-xs uppercase font-medium text-yellowGreen-700 bg-yellowGreen-200 rounded-full">{{ $badge ?? 'How it works' }}</span>
                <h1 class="font-heading tracking-tight text-4xl sm:text-5xl font-bold mb-4">{{ $title ?? false }}</h1>
                <p class="text-lg text-gray-500">{{ $subtitle ?? false }}</p>
            </div>
            <div class="grid md:grid-cols-3 items-center">
                @foreach($steps ?? [] as $key => $step)
                    <div class="w-full h-full">
                        <div class="flex flex-col md:flex-row md:flex items-center h-full">
                            <div
                                 @class([
                                    'w-full max-w-xs mx-auto md:max-w-none md:mr-4 p-px rounded-xl h-full bg-gradient-to-br from-cyanGreen-800 to-cyan-800' => ($key === 0),
                                    'w-full max-w-xs mx-auto md:max-w-none md:mr-4 p-px rounded-xl h-full border border-gray-200' => ($key > 0),
                                 ])
                            >
                                <div class="p-4 rounded-xl bg-white h-full">
                                    <div class="flex-shrink-0 inline-flex w-10 h-10 mb-4 items-center justify-center font-bold bg-gray-100 border border-gray-200 rounded-full transition duration-200">{{ $key + 1 }}</div>
                                    <p class="max-w-xs font-medium @if($key > 0) text-gray-500 @endif">{{ $step ?? false }}</p>
                                </div>
                            </div>
                            @if($key < count($steps) - 1)
                                <span class="hidden md:inline-block mr-4">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M6 4L10 8L6 12" stroke="#9CABA2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                                <div class="flex items justify-center transform rotate-90 my-4 md:hidden">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 4L10 8L6 12" stroke="#9CABA2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
