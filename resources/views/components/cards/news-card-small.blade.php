@props(['article'])

<article class="group relative flex gap-4 overflow-hidden rounded-sm border border-gray-100 bg-white p-3 motion-border-card" style="display: flex; gap: 16px; margin-bottom: 24px;">
    {{-- Thumbnail --}}
    <a href="{{ route('news.show', $article['slug']) }}" 
       class="block shrink-0 overflow-hidden bg-gray-100"
       style="width: 180px; flex-shrink: 0; aspect-ratio: 16/9; overflow: hidden; position: relative;">
        <img src="{{ $article['image'] }}" 
             alt="{{ $article['title'] }}" 
             class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110"
             style="position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover;">
             
        {{-- Category Badge --}}
        <div class="absolute top-0 right-0 bg-[#ED1C24] text-white font-bold uppercase z-20"
             style="font-size: 9px; padding: 4px 6px; letter-spacing: 0.5px; white-space: nowrap;">
            @php
                $cat = collect(config('news.categories'))->firstWhere('value', $article['category']);
                $catName = $cat ? $cat['label'] : $article['category'];
            @endphp
            {{ $catName }}
        </div>
    </a>

    {{-- Content --}}
    <div class="flex flex-col" style="display: flex; flex-direction: column; gap: 8px;">
        <h4 style="margin: 0; font-size: 16px; font-weight: 700; line-height: 1.4; color: black;" class="line-clamp-2 group-hover:text-[#ED1C24] transition-colors">
            <a href="{{ route('news.show', $article['slug']) }}" style="text-decoration: none; color: inherit;">
                {{ $article['title'] }}
            </a>
        </h4>
        
        <p style="margin: 0; font-size: 14px; line-height: 1.6; color: #555;" class="line-clamp-3">
            {{ $article['excerpt'] }}
        </p>
    </div>
</article>
