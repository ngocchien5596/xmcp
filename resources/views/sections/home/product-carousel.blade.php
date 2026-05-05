<section class="bg-[#F4EFEA] py-16 md:py-24 relative overflow-hidden">
    <div class="mx-auto w-full max-w-[1280px] px-4 md:px-8">
        <div class="mb-8 flex items-center justify-between gap-4">
            @include('components.ui.section-title', ['title' => 'Sản phẩm'])

            <div class="hidden items-center gap-3 md:flex">
                <button type="button" class="product-carousel-prev product-carousel-nav" aria-label="Sản phẩm trước">
                    <i class="fa-solid fa-chevron-left text-base"></i>
                </button>
                <button type="button" class="product-carousel-next product-carousel-nav" aria-label="Sản phẩm tiếp theo">
                    <i class="fa-solid fa-chevron-right text-base"></i>
                </button>
            </div>
        </div>

        <div class="product-carousel flex snap-x snap-mandatory gap-6 overflow-x-auto scroll-smooth pb-8" data-product-carousel>
            @foreach($products as $product)
                <div class="shrink-0 snap-start">
                    @include('components.cards.product-overlay-card', ['product' => $product])
                </div>
            @endforeach
        </div>
    </div>
</section>
