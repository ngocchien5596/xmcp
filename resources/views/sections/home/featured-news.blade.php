@include('components.carousel.horizontal-card-carousel', [
    'title' => 'Tin tức nổi bật',
    'items' => $featuredNews,
    'cardView' => 'components.cards.feature-card',
    'cardVariant' => 'news',
    'viewAllUrl' => route('news.index'),
    'sectionClass' => 'bg-white',
    'trackClass' => 'news-carousel'
])
