@extends('layouts.app')

@section('title', $seo['title'])

@section('content')
    @php $hero = config('page-heroes.news'); @endphp

    @include('sections.common.inner-hero', [
        'title' => $hero['title'],
        'subtitle' => $hero['subtitle'],
        'background' => $hero['background'],
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
