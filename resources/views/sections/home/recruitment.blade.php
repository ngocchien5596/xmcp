@include('components.carousel.horizontal-card-carousel', [
    'title' => 'Cơ hội nghề nghiệp',
    'items' => $recruitmentArticles,
    'cardView' => 'components.cards.feature-card',
    'cardVariant' => 'recruitment',
    'viewAllUrl' => route('news.index', ['category' => 'recruitment']),
    'viewAllLabel' => 'Xem tất cả',
    'sectionClass' => 'bg-gradient-to-r from-[#FDF2F4] to-[#C9D6ED]',
    'trackClass' => 'recruitment-carousel'
])
