<a href="{{ route('products.show', $product['slug']) }}"
    class="pcard reveal reveal-up block h-[440px] w-[260px] md:w-[340px] lg:w-[360px] md:h-[510px] bg-white"
    data-animate>

    {{-- Background Image --}}
    <div class="relative overflow-hidden h-full w-full">
        <img
            src="{{ asset($product['image']) }}"
            alt="{{ $product['title'] }}"
            loading="lazy"
            class="pcard-img"
        >
    </div>

    {{-- Product Title at Bottom --}}
    <div class="absolute bottom-0 left-0 right-0 z-20 px-5 pb-6">
        <h3 class="pcard-title text-center text-[15px] font-black uppercase tracking-wide text-[#111] drop-shadow-sm">
            {{ $product['title'] }}
        </h3>
    </div>
</a>
