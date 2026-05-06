@extends('layouts.app')

@section('title', $seo['title'])

@section('content')
    {{-- Inner Hero --}}
    @include('sections.common.inner-hero', [
        'pageTitle' => 'TIN TỨC',
        'pageSubtitle' => 'Cập nhật những tin tức mới nhất về hoạt động, sự kiện và thông tin tuyển dụng từ Công ty Cổ phần Xi măng Cẩm Phả.',
        'bgImage' => 'https://images.unsplash.com/photo-1541888086425-d81bb19240f5?q=80&w=2070&auto=format&fit=crop'
    ])

    {{-- Category Tabs --}}
    <x-ui.sticky-category-tabs 
        :categories="$categories" 
        :currentValue="$activeCategory" 
        baseRoute="news.index"
        queryKey="category"
    />

    {{-- Featured News (Only show on 'All' category and first page) --}}
    @if(!$activeCategory && $pagination['current_page'] == 1)
        <x-sections.news.featured-news :items="$featuredNews" />
    @endif

    {{-- News Grid --}}
    <x-sections.news.news-grid :items="$articles" />

    {{-- Pagination --}}
    <div class="bg-white pb-24">
        <div class="max-w-[1440px] mx-auto px-4 md:px-8">
            <x-ui.pagination :pagination="$pagination" />
        </div>
    </div>

    {{-- Partners Section --}}
    @include('sections.common.partner-section', ['partners' => $partners])
@endsection
