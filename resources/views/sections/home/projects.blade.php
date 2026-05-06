@include('components.carousel.horizontal-card-carousel', [
    'title' => 'Công trình tiêu biểu',
    'items' => $projects,
    'cardView' => 'components.cards.feature-card',
    'cardVariant' => 'project',
    'viewAllUrl' => route('projects.index'),
    'sectionClass' => 'bg-white',
    'trackClass' => 'projects-carousel'
])
