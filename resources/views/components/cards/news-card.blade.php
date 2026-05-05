<article class="group relative flex h-full flex-col overflow-hidden rounded-sm bg-white motion-card motion-border-card reveal reveal-up" data-animate>
    {{-- Image Container with Title Overlay --}}
    <div style="position: relative; width: 100%; aspect-ratio: 4/3; overflow: hidden; background-color: #f3f4f6;">
        <a href="{{ route('news.show', $article['slug']) }}" style="display: block; width: 100%; height: 100%;">
            <img src="{{ asset($article['image']) }}" 
                 alt="{{ $article['title'] }}" 
                 loading="lazy" 
                 width="400" 
                 height="260" 
                 class="h-full w-full object-cover motion-image"
                 style="position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; z-index: 1;">
        </a>

        {{-- Category Badge --}}
        <div class="absolute top-0 right-0 bg-[#ED1C24] text-white text-[10px] font-black uppercase tracking-widest px-3 py-1.5 z-20">
            @php
                $cat = collect(config('news.categories'))->firstWhere('value', $article['category']);
                $catName = $cat ? $cat['label'] : $article['category'];
            @endphp
            {{ $catName }}
        </div>

        {{-- Red Title Block (Overlay at bottom) with hover glow --}}
        <div class="news-title-block" style="position: absolute; bottom: 0; left: 0; right: 0; background-color: #ED1C24; padding: 16px 20px; z-index: 10;">
            <h3 style="margin: 0; font-size: 16px; font-weight: 700; line-height: 1.4; color: white;">
                <a href="{{ route('news.show', $article['slug']) }}" style="color: white; text-decoration: none;">
                    {{ $article['title'] }}
                </a>
            </h3>
        </div>
    </div>

    {{-- Excerpt (3 lines with ellipsis) --}}
    <div class="mt-4 flex-grow flex flex-col" style="margin-top: 16px; display: flex; flex-direction: column; flex-grow: 1;">
        <p style="margin: 0; font-size: 15px; line-height: 1.6; color: #333; font-weight: 500; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">
            {{ $article['excerpt'] }}
        </p>
    </div>
</article>
