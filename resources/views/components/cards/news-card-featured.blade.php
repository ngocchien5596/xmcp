@props(['article'])

<article class="group relative flex h-full min-h-[500px] flex-col justify-end overflow-hidden rounded-sm motion-border-card reveal reveal-up" data-animate>
    {{-- Background Image & Badge Container --}}
    <div class="absolute inset-0 z-0">
        <img src="{{ asset($article['image']) }}" 
             alt="{{ $article['title'] }}" 
             class="h-full w-full object-cover transition-transform duration-1000 group-hover:scale-110">
        {{-- Overlay gradient for text readability --}}
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 transition-opacity duration-500 group-hover:opacity-100"></div>

        {{-- Category Badge - Anchored to Image Top-Left --}}
        <div class="absolute left-4 top-4 z-20 bg-[#ED1C24] px-4 py-2 text-[13px] font-black uppercase tracking-wider text-white shadow-lg">
            @php
                $cat = collect(config('news.categories'))->firstWhere('value', $article['category']);
                $catName = $cat ? $cat['label'] : $article['category'];
            @endphp
            {{ $catName }}
        </div>
    </div>

    {{-- Content Container - Red block at the bottom --}}
    <div class="relative z-10 w-full bg-[#ED1C24] p-6">
        <h3 class="m-0 text-xl font-bold leading-tight text-white md:text-[22px]">
            <a href="{{ route('news.show', $article['slug']) }}" class="transition-opacity hover:opacity-90">
                {{ $article['title'] }}
            </a>
        </h3>
    </div>
</article>

