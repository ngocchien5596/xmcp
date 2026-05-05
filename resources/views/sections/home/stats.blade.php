<section class="bg-white py-12 md:py-16 border-b border-gray-100">
    <div class="mx-auto max-w-[1440px] px-4 md:px-8">
        <div class="grid grid-cols-2 gap-8 md:grid-cols-4 text-center" data-stagger-container>
            @foreach($stats as $stat)
                <div class="flex flex-col items-center justify-center space-y-2 group stat-animate" data-animate>
                    <h3 class="text-sm md:text-[15px] font-bold text-gray-900 uppercase tracking-wide">
                        {{ $stat['label'] }}
                    </h3>
                    <div class="flex items-baseline justify-center space-x-1.5 transition-transform duration-300 group-hover:scale-105">
                        <span class="text-4xl md:text-5xl font-black text-[#ED1C24]">
                            {{ $stat['value'] }}
                        </span>
                        <span class="text-xs md:text-sm font-medium text-gray-600">
                            {{ $stat['unit'] }}
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
