@extends('layouts.app')
 
 @section('title', 'Công trình tiêu biểu - Xi Măng Cẩm Phả')
 @section('description', 'Danh sách các công trình trọng điểm và tiêu biểu sử dụng sản phẩm xi măng Cẩm Phả trên toàn quốc.')
 
 @section('content')
 <section class="relative flex h-[350px] items-center justify-center overflow-hidden md:h-[450px]">
     <div class="absolute inset-0 bg-gray-900">
         <img src="https://images.unsplash.com/photo-1541888946425-d81bb19480c5?q=80&w=2070&auto=format&fit=crop" alt="Công trình tiêu biểu" class="h-full w-full object-cover opacity-60">
         <div class="absolute inset-0 bg-gradient-to-b from-transparent to-gray-900/80"></div>
     </div>
 
     <div class="relative z-10 mx-auto flex w-full max-w-[1440px] flex-col items-center px-4 text-center">
         <h1 class="mb-4 text-3xl font-black uppercase tracking-tighter text-white md:text-5xl lg:text-6xl">
             Công trình tiêu biểu
         </h1>
         <div class="h-1.5 w-24 bg-[#ED1C24]"></div>
         <p class="mt-6 max-w-2xl text-lg font-medium text-gray-200 md:text-xl">
             Xi măng Cẩm Phả tự hào đồng hành cùng các siêu dự án trọng điểm quốc gia, góp phần kiến tạo diện mạo hiện đại cho đất nước.
         </p>
     </div>
 </section>
 
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
