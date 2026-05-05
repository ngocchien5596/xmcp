<div class="group relative aspect-[3/4] overflow-hidden rounded-sm bg-[#222] motion-card motion-border-card reveal reveal-up" data-animate>
    <!-- Background Image -->
    <img src="{{ $product['image'] }}" alt="{{ $product['title'] }}" loading="lazy" width="400" height="533" 
        class="h-full w-full object-cover transition-all duration-700 group-hover:scale-110 motion-image">
    
    <!-- Bottom Title Bar (Always Visible) -->
    <div class="absolute bottom-0 left-0 right-0 h-16 bg-black/80 flex items-center justify-center transition-opacity duration-300 group-hover:opacity-0 z-10">
        <h3 class="px-4 text-sm font-bold uppercase tracking-wider text-white text-center">
            {{ $product['title'] }}
        </h3>
    </div>

    <!-- Hover Detail Overlay (Visible on Hover) -->
    <div class="absolute inset-0 bg-black/90 flex flex-col items-center justify-center p-6 text-center opacity-0 group-hover:opacity-100 transition-all duration-500 z-20">
        <h3 class="text-lg font-black uppercase tracking-widest text-[var(--color-brand-red)] mb-4">{{ $product['title'] }}</h3>
        
        @if(!empty($product['specifications']))
            <div class="mb-6 space-y-2">
                @foreach($product['specifications'] as $key => $val)
                    <p class="text-[11px] text-white/70 uppercase tracking-tight">
                        <span class="text-white/40">{{ $key }}:</span> {{ $val }}
                    </p>
                @endforeach
            </div>
        @endif
        
        <a href="{{ route('products.show', $product['slug']) }}" 
            class="inline-block border-2 border-[var(--color-brand-red)] px-6 py-2 text-[10px] font-black uppercase tracking-[0.2em] text-white transition-all hover:bg-[var(--color-brand-red)]">
            XEM CHI TIẾT
        </a>
    </div>
</div>
