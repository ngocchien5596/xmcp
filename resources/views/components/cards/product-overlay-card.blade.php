<div class="group relative aspect-[3/4] overflow-hidden rounded-sm bg-[#222] motion-card motion-border-card reveal reveal-up" data-animate>
    <img src="{{ $product['image'] }}" alt="{{ $product['title'] }}" loading="lazy" width="400" height="533" class="h-full w-full object-cover opacity-70 group-hover:opacity-90 motion-image">
    <div class="absolute inset-0 overlay-black"></div>
    <div class="absolute bottom-0 left-0 right-0 p-6 z-10">
        <h3 class="text-lg font-bold text-white">{{ $product['title'] }}</h3>
        @if(!empty($product['specifications']))
            <div class="mt-2 space-y-1">
                @foreach($product['specifications'] as $key => $val)
                    <p class="text-[12px] text-white/70"><span class="font-medium text-white/90">{{ $key }}:</span> {{ $val }}</p>
                @endforeach
            </div>
        @endif
        <a href="{{ route('products.show', $product['slug']) }}" class="mt-4 inline-block text-xs font-bold uppercase tracking-wider text-[var(--color-brand-red)] transition-colors hover:text-white motion-button" style="position:relative; overflow:hidden;">XEM THÊM</a>
    </div>
</div>
