@props([
    'title',
    'items',
    'cardView',
    'cardVariant' => null,
    'viewAllUrl' => null,
    'viewAllLabel' => 'Xem tất cả',
    'sectionClass' => 'bg-white',
    'trackClass' => '',
    'carouselId' => 'carousel-' . Str::random(8),
    'cardWidth' => 'w-[290px] md:w-[340px] lg:w-[380px]'
])

<section class="{{ $sectionClass }} py-10 md:py-14 relative overflow-hidden">
    <div class="mx-auto w-full max-w-[1280px] px-4 md:px-5 lg:px-6">
        <div class="mb-8 flex items-center justify-between gap-4">
            @include('components.ui.section-title', ['title' => $title])

            <div class="flex items-center gap-4 md:gap-8">
                @if($viewAllUrl)
                    <a href="{{ $viewAllUrl }}" class="group inline-flex items-center gap-2 text-[13px] font-black uppercase tracking-widest text-[#ED1C24] transition-colors hover:text-[#B80000]">
                        <span class="hidden sm:inline">{{ $viewAllLabel }}</span>
                        <span class="sm:hidden">Xem thêm</span>
                        <i class="fa-solid fa-arrow-right text-[10px] transition-transform duration-300 group-hover:translate-x-1"></i>
                    </a>
                @endif

                <div class="flex items-center gap-3">
                    <button type="button" 
                            class="js-carousel-prev carousel-nav" 
                            aria-label="Xem thẻ trước"
                            data-carousel-target="{{ $carouselId }}">
                        <i class="fa-solid fa-chevron-left text-base"></i>
                    </button>
                    <button type="button" 
                            class="js-carousel-next carousel-nav" 
                            aria-label="Xem thẻ tiếp theo"
                            data-carousel-target="{{ $carouselId }}">
                        <i class="fa-solid fa-chevron-right text-base"></i>
                    </button>
                </div>
            </div>
        </div>

        <div id="{{ $carouselId }}"
             class="js-horizontal-carousel flex snap-x snap-mandatory gap-4 overflow-x-auto overflow-y-hidden scroll-smooth pb-4 md:gap-6 {{ $trackClass }}"
             data-carousel>
            @foreach($items as $item)
                <div class="{{ $cardWidth }} shrink-0 snap-start">
                    @include($cardView, ['item' => $item, 'product' => $item, 'variant' => $cardVariant])
                </div>
            @endforeach
        </div>
    </div>
</section>
