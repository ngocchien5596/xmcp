@extends('layouts.app')
 
 @section('title', 'Công trình tiêu biểu - Xi Măng Cẩm Phả')
 @section('description', 'Danh sách các công trình trọng điểm và tiêu biểu sử dụng sản phẩm xi măng Cẩm Phả trên toàn quốc.')
 
 @section('content')
    @php $hero = config('page-heroes.projects'); @endphp

    @include('sections.common.inner-hero', [
        'title' => $hero['title'],
        'subtitle' => $hero['subtitle'],
        'background' => $hero['background'],
    ])
 
 <!-- Category Filter -->
 <x-ui.sticky-category-tabs 
     :categories="$categories" 
     :currentValue="$currentCategory" 
     baseRoute="projects.index"
     queryKey="category"
 />
 
 <section class="bg-gray-50 py-16 md:py-24">
     <div class="mx-auto max-w-[1440px] px-4 md:px-8">
         <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
             @forelse($projects as $project)
                 @include('components.cards.feature-card', ['item' => $project, 'variant' => 'project'])
             @empty
                 <div class="col-span-full py-20 text-center">
                     <p class="text-xl font-bold text-gray-500">Hiện tại chưa có công trình trong danh mục này.</p>
                 </div>
             @endforelse
         </div>
     </div>
 </section>
 
 @include('sections.common.partner-section', ['partners' => $partners])
 @endsection
