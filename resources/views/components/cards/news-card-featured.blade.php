@props(['article'])

<article class="group relative flex-1 overflow-hidden rounded-sm motion-border-card" 
         style="position: relative; width: 100%; height: 100%; flex: 1; overflow: hidden; background-color: #f3f4f6; display: flex; flex-direction: column; justify-content: flex-end; min-height: 400px;">
    {{-- Background Image --}}
    <img src="{{ $article['image'] }}" 
         alt="{{ $article['title'] }}" 
         class="absolute inset-0 h-full w-full object-cover transition-transform duration-1000 group-hover:scale-110"
         style="position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; z-index: 1;">
    
    {{-- Category Badge --}}
    <div class="absolute top-0 right-0 bg-[#ED1C24] text-white font-bold uppercase z-20"
         style="font-size: 11px; padding: 6px 10px; letter-spacing: 0.5px; white-space: nowrap;">
        @php
            $cat = collect(config('news.categories'))->firstWhere('value', $article['category']);
            $catName = $cat ? $cat['label'] : $article['category'];
        @endphp
        {{ $catName }}
    </div>
    {{-- Content Container - Red block at the bottom --}}
    <div style="position: relative; z-index: 10; width: 100%; background-color: #ED1C24; padding: 24px; box-sizing: border-box;">
        <h3 style="margin: 0; font-size: 20px; font-weight: 700; line-height: 1.4; color: white;">
            <a href="{{ route('news.show', $article['slug']) }}" style="color: white; text-decoration: none;" class="hover:opacity-80 transition-opacity">
                {{ $article['title'] }}
            </a>
        </h3>
    </div>
</article>
