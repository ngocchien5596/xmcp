@props([
    'href' => '#',
    'image',
    'title',
    'category' => null,
    'aspect' => 'aspect-[4/3]',
    'class' => ''
])

<a href="{{ $href }}" 
   class="group relative block {{ $aspect }} overflow-hidden rounded-[2px] bg-neutral-900 {{ $class }} reveal reveal-up motion-border-card" 
   {{ $attributes }}
   data-animate>
    
    {{-- Image Container --}}
    <div class="h-full w-full overflow-hidden">
        <img 
            src="{{ asset($image) }}" 
            alt="{{ $title }}" 
            loading="lazy" 
            class="h-full w-full object-cover transition-transform duration-1000 ease-out group-hover:scale-110"
        >

        @if($category)
            <div class="absolute left-4 top-4 z-20 bg-[#ED1C24] px-4 py-2 text-[12px] font-black uppercase tracking-wider text-white shadow-lg">
                {{ mb_strtoupper($category) }}
            </div>
        @endif
    </div>

    {{-- Overlays --}}
    {{-- Main Gradient (Darker at bottom) --}}
    <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/40 to-transparent opacity-90 transition-opacity duration-500 group-hover:opacity-100"></div>
    
    {{-- Subtle Red Glow on Hover --}}
    <div class="absolute inset-0 bg-[var(--color-brand-red)]/5 opacity-0 transition-opacity duration-500 group-hover:opacity-100"></div>

    {{-- Content --}}
    <div class="absolute inset-x-0 bottom-0 p-6 z-10">
        <div class="translate-y-4 transition-transform duration-500 ease-out group-hover:translate-y-0">
            <h3 class="text-[17px] font-extrabold leading-tight text-white uppercase tracking-tight line-clamp-2 md:text-[19px]">
                {{ $title }}
            </h3>
            
            {{-- Action Line (Animated on hover) --}}
            <div class="mt-5 flex items-center gap-3">
                <span class="shrink-0 text-[11px] font-bold uppercase tracking-widest text-white/50 transition-colors group-hover:text-white">
                    Xem chi tiết
                </span>
                <div class="h-px flex-grow bg-white/10 transition-all duration-500 group-hover:bg-[var(--color-brand-red)]/50"></div>
                <div class="relative flex h-5 w-5 items-center justify-center rounded-full border border-white/20 transition-all duration-500 group-hover:border-[var(--color-brand-red)] group-hover:bg-[var(--color-brand-red)]">
                    <svg class="h-2.5 w-2.5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4">
                        <path d="M9 5l7 7-7 7"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    {{-- Bottom Accent Bar --}}
    <div class="absolute bottom-0 left-0 h-[3px] w-0 bg-[var(--color-brand-red)] transition-all duration-700 ease-in-out group-hover:w-full"></div>
</a>
