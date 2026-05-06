@extends('layouts.app')
 
 @section('title', $project['title'] . ' - Xi Măng Cẩm Phả')
 @section('description', $project['description'])
 
 @section('content')
    @php $hero = config('page-heroes.projects'); @endphp

    @include('sections.common.inner-hero', [
        'title' => $hero['title'],
        'subtitle' => $hero['subtitle'],
        'background' => $hero['background'],
    ])

    <main class="bg-white">
 
     <article class="py-12 md:py-20">
         <div class="mx-auto max-w-[1440px] px-4 md:px-8">
             <div class="grid grid-cols-1 gap-12 lg:grid-cols-12">
                 <!-- Left: Content -->
                 <div class="lg:col-span-8">
                     <div class="mb-10 overflow-hidden rounded-sm bg-gray-100 shadow-2xl">
                         <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}" class="h-full w-full object-cover">
                     </div>
 
                     <div class="prose prose-lg max-w-none prose-headings:text-gray-900 prose-headings:font-black prose-p:text-gray-700 prose-strong:text-gray-900">
                         <h1 class="mb-6 text-3xl font-black uppercase tracking-tight text-gray-900 md:text-4xl lg:text-5xl">
                             {{ $project['title'] }}
                         </h1>
                         
                         <div class="mb-10 flex flex-wrap gap-8 border-y border-gray-100 py-6">
                             <div class="flex flex-col">
                                 <span class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400">Địa điểm</span>
                                 <span class="mt-1 font-bold text-gray-900">{{ $project['location'] }}</span>
                             </div>
                             <div class="flex flex-col">
                                 <span class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400">Năm hoàn thành</span>
                                 <span class="mt-1 font-bold text-gray-900">{{ $project['year'] }}</span>
                             </div>
                             <div class="flex flex-col">
                                 <span class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400">Loại công trình</span>
                                 <span class="mt-1 font-bold text-[#ED1C24] uppercase">{{ $project['category_label'] }}</span>
                             </div>
                         </div>
 
                         <div class="project-rich-content">
                             {!! $project['content'] !!}
                         </div>
 
                         <div class="mt-12 rounded-sm bg-gray-50 p-8 border-l-4 border-[#ED1C24]">
                             <h3 class="mb-4 text-xl font-black text-gray-900 uppercase">Thông tin kỹ thuật dự án</h3>
                             <ul class="space-y-3">
                                 @foreach($project['features'] as $feature)
                                     <li class="flex items-start gap-3">
                                         <svg class="mt-1 h-5 w-5 shrink-0 text-[#ED1C24]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg>
                                         <span class="font-medium text-gray-700">{{ $feature }}</span>
                                     </li>
                                 @endforeach
                             </ul>
                         </div>
                     </div>
                 </div>
 
                 <!-- Right: Sidebar -->
                 <aside class="lg:col-span-4">
                     <div class="sticky top-24 space-y-10">
                         <div class="rounded-sm bg-gray-900 p-8 text-white shadow-xl">
                             <h3 class="mb-6 text-xl font-black uppercase tracking-tight">Đối tác tin cậy</h3>
                             <p class="mb-8 text-sm leading-relaxed text-gray-400">
                                 Xi măng Cẩm Phả luôn cam kết mang lại những sản phẩm đạt tiêu chuẩn chất lượng cao nhất, phục vụ mọi yêu cầu kỹ thuật khắt khe của các công trình.
                             </p>
                             <a href="{{ route('contact.index') }}" class="inline-flex w-full items-center justify-center rounded-sm bg-[#ED1C24] px-6 py-3 font-bold text-white transition-colors hover:bg-red-700">
                                 Liên hệ tư vấn kỹ thuật
                             </a>
                         </div>
 
                         <div>
                             <h3 class="mb-6 text-xl font-black uppercase tracking-tight text-gray-900 border-b-2 border-[#ED1C24] inline-block pb-1">Công trình khác</h3>
                             <div class="space-y-6">
                                 @foreach($otherProjects as $other)
                                     <a href="{{ route('projects.show', $other['slug']) }}" class="group flex items-center gap-4">
                                         <div class="h-16 w-16 shrink-0 overflow-hidden rounded-sm bg-gray-100">
                                             <img src="{{ asset($other['image']) }}" alt="{{ $other['title'] }}" class="h-full w-full object-cover transition-transform group-hover:scale-110">
                                         </div>
                                         <div class="flex flex-col">
                                             <span class="text-[10px] font-black uppercase tracking-wider text-[#ED1C24]">{{ $other['category_label'] }}</span>
                                             <h4 class="mt-1 text-sm font-bold leading-tight text-gray-900 line-clamp-2 group-hover:text-[#ED1C24] transition-colors">
                                                 {{ $other['title'] }}
                                             </h4>
                                         </div>
                                     </a>
                                 @endforeach
                             </div>
                         </div>
                     </div>
                 </aside>
             </div>
         </div>
     </article>
 </main>
 
 @include('sections.common.partner-section', ['partners' => $partners ?? []])
 @endsection
