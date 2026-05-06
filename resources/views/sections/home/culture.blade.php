@include('components.carousel.horizontal-card-carousel', [
    'title' => 'Văn hóa doanh nghiệp',
    'items' => $cultureItems,
    'cardView' => 'components.cards.feature-card',
    'cardVariant' => 'culture',
    'viewAllUrl' => route('news.index', ['category' => 'company-activity']),
    'sectionClass' => 'bg-[#F8FAFC]',
    'trackClass' => 'culture-carousel'
])
