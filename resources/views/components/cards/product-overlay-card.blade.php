<a href="{{ route('products.show', $product['slug']) }}" 
    class="motion-border-card group relative block h-[380px] w-[260px] overflow-hidden bg-[#222] md:h-[480px] md:w-[340px] lg:w-[360px] reveal reveal-up" 
    style="overflow: hidden !important;"
    data-animate>
    
    <!-- Background Image -->
    <img src="{{ asset($product['image']) }}" alt="{{ $product['title'] }}" loading="lazy" width="400" height="533" 
        class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-[1.04] motion-image">
    
    <!-- Hover Detail Overlay (Visible only on Hover) -->
    <div class="absolute inset-0 bg-black/40 flex flex-col items-center justify-center p-6 text-center opacity-0 group-hover:opacity-100 transition-all duration-500 z-30">
        <div class="transform translate-y-4 transition-transform duration-500 group-hover:translate-y-0">
            <h3 class="text-lg font-black uppercase tracking-widest text-white mb-2">{{ $product['title'] }}</h3>
            <span class="inline-block border-b-2 border-[var(--color-brand-red)] pb-1 text-[10px] font-bold uppercase tracking-[0.2em] text-white">
                Khám phá ngay
            </span>
        </div>
    </div>

    <!-- Border highlight on hover (handled by motion-border-card) -->
</a>
