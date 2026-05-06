@include('components.carousel.horizontal-card-carousel', [
    'title' => 'Sản phẩm',
    'items' => $products,
    'cardView' => 'components.cards.product-overlay-card',
    'viewAllUrl' => route('products.index'),
    'sectionClass' => 'bg-[#F4EFEA]',
    'trackClass' => 'product-carousel',
    'cardWidth' => 'w-[280px] md:w-[320px] lg:w-[360px]'
])
