<a href="{{ route('products.show', $product['slug']) }}" 
    class="motion-border-card group relative block h-[420px] w-[260px] overflow-hidden bg-[#222] md:h-[470px] md:w-[340px] lg:w-[360px] reveal reveal-up" 
    data-animate>
    
    <!-- Background Image -->
    <img src="{{ $product['image'] }}" alt="{{ $product['title'] }}" loading="lazy" width="400" height="533" 
        class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-[1.04] motion-image">
    
    <!-- Permanent Bottom Title Overlay -->
    <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/90 via-black/60 to-transparent px-5 pb-8 pt-24 transition-colors duration-300 group-hover:from-[#ED1C24]/90 group-hover:via-[#ED1C24]/40">
        <h3 class="text-center text-[15px] font-black uppercase tracking-wider text-white drop-shadow-lg md:text-[16px]">
            {{ $product['title'] }}
        </h3>
        
        <!-- Subtle indicator shown on hover -->
        <div class="mt-4 flex justify-center opacity-0 transition-opacity duration-300 group-hover:opacity-100">
            <span class="border-b-2 border-white pb-1 text-[10px] font-bold uppercase tracking-[0.2em] text-white">
                Khám phá ngay
            </span>
        </div>
    </div>

    <!-- Border highlight on hover (from motion-border-card CSS) -->
</a>
