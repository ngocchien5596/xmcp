@php
    $location = $item['location'] ?? null;
    $year = $item['year'] ?? null;
    $hasMeta = $location || $year;
    
    // Badge logic: Use explicit badge or fallback to category label from config
    $badge = $item['badge'] ?? null;
    if (!$badge && isset($item['category'])) {
        $categoryLabel = collect(config('news.categories'))
            ->where('value', $item['category'])
            ->first()['label'] ?? null;
        
        if ($categoryLabel && $categoryLabel !== 'Tất cả') {
            $badge = mb_strtoupper($categoryLabel);
        }
    }
    
    $excerpt = $item['excerpt'] ?? ($item['description'] ?? null);
    $url = $item['url'] ?? (isset($item['slug']) ? route($variant === 'project' ? 'projects.show' : 'news.show', $item['slug']) : '#');
@endphp

<article class="feature-card group relative flex flex-col overflow-hidden bg-white shadow-sm ring-1 ring-black/5 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl reveal reveal-up motion-border-card h-[460px] md:h-[510px] w-full lg:w-[360px]" data-animate>
    {{-- Image Section --}}
    <div class="relative h-48 shrink-0 overflow-hidden bg-gray-100 md:h-56">
        <img
            src="{{ asset($item['image']) }}"
            alt="{{ $item['title'] }}"
            class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-[1.06]"
            loading="lazy"
        >

        @if(!empty($badge))
            <div class="absolute left-4 top-4 z-10 bg-[#ED1C24] px-4 py-2 text-[13px] font-black uppercase tracking-wider text-white shadow-lg">
                {{ $badge }}
            </div>
        @endif
    </div>

    {{-- Content Section --}}
    <div class="flex flex-grow flex-col p-6 md:p-7">
        @if($hasMeta)
            <div class="text-[11px] font-black uppercase tracking-[0.12em] text-[#9B94A8] flex items-center gap-2">
                @if($location)
                    <span class="line-clamp-1">{{ $location }}</span>
                @endif

                @if($location && $year)
                    <span class="text-[#ED1C24]">•</span>
                @endif

                @if($year)
                    <span>{{ $year }}</span>
                @endif
            </div>
        @endif

        <h3 class="{{ $hasMeta ? 'mt-3' : '' }} text-[18px] font-black uppercase leading-[1.2] text-[#071426] transition-colors group-hover:text-[#ED1C24] line-clamp-2">
            <a href="{{ $url }}" class="no-underline text-inherit">
                {{ $item['title'] }}
            </a>
        </h3>

        @if(!empty($excerpt))
            <p class="mt-4 text-[14px] leading-[1.6] text-[#4A5568] line-clamp-2 md:line-clamp-3">
                {{ $excerpt }}
            </p>
        @endif

        <div class="mt-auto pt-5">
            @if(!empty($url) && $url !== '#')
                <div class="border-t border-gray-100 pt-5">
                    <a href="{{ $url }}" class="inline-flex items-center gap-2 text-[13px] font-black uppercase tracking-widest text-[#ED1C24] no-underline transition-all duration-300">
                        <span>Xem chi tiết</span>
                        <span class="text-lg transition-transform duration-300 group-hover:translate-x-1.5">→</span>
                    </a>
                </div>
            @endif
        </div>
    </div>
</article>
