<section class="bg-[#F4EFEA] py-16 md:py-24 relative overflow-hidden">
    <div class="mx-auto max-w-[1440px] px-4 md:px-8">
        @include('components.ui.section-title', ['title' => 'Sản phẩm'])

        <div class="scrollbar-hide -mx-4 flex snap-x snap-mandatory overflow-x-auto px-4 pb-8 md:-mx-8 md:px-8" data-stagger-container>
            @foreach($products as $product)
                <div class="w-[85vw] shrink-0 snap-center pr-4 sm:w-[calc(50%-1rem)] md:w-[calc(33.333%-1rem)]">
                    @include('components.cards.product-overlay-card', ['product' => $product])
                </div>
            @endforeach
        </div>
    </div>
</section>
