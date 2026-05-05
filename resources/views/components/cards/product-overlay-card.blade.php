<div class="group relative aspect-[3/4] overflow-hidden rounded-sm bg-[#222] motion-card motion-border-card reveal reveal-up" data-animate>
    <!-- Background Image -->
    <img src="{{ $product['image'] }}" alt="{{ $product['title'] }}" loading="lazy" width="400" height="533" 
        class="h-full w-full object-cover transition-all duration-700 group-hover:scale-110 motion-image">
    
    <!-- Persistent Bottom Title Bar (Always Visible) -->
    <div style="position: absolute; bottom: 0; left: 0; right: 0; height: 64px; background: rgba(0, 0, 0, 0.85); display: flex; align-items: center; justify-content: center; z-index: 20; pointer-events: none;">
        <h3 style="color: white; font-size: 14px; font-weight: 800; text-transform: uppercase; letter-spacing: 0.05em; text-align: center; margin: 0; padding: 0 16px;">
            {{ $product['title'] }}
        </h3>
    </div>

    <!-- Hover Detail Overlay (Visible on Hover) -->
    <div class="absolute inset-0 bg-black/90 flex flex-col items-center justify-center p-6 text-center opacity-0 group-hover:opacity-100 transition-all duration-500 z-30">
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
