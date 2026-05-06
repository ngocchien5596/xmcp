<a href="{{ route('products.show', $product['slug']) }}" 
    class="group relative block h-[440px] w-[260px] md:w-[340px] lg:w-[360px] overflow-hidden rounded-[4px] bg-black md:h-[510px] cursor-pointer reveal reveal-up motion-border-card" 
    data-animate>
    
    <!-- Background Image -->
    <img 
        src="{{ asset($product['image']) }}" 
        alt="{{ $product['title'] }}" 
        loading="lazy" 
        class="h-full w-full object-contain transition-transform duration-500 group-hover:scale-[1.04]"
    >
    
    <!-- Suble Gradient Overlay (Only at the bottom 40% for maximum image brightness) -->
    <div class="absolute bottom-0 left-0 right-0 h-2/5 bg-gradient-to-t from-black/50 to-transparent"></div>
    
    <!-- Product Title at Bottom -->
    <div class="absolute bottom-0 left-0 right-0 px-5 pb-6">
        <h3 class="text-center text-[15px] font-black uppercase tracking-wide text-white">
            {{ $product['title'] }}
        </h3>
    </div>
</a>
