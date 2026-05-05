@props(['items'])

@php
    $featured = $items->first();
    $others = $items->skip(1)->take(3);
@endphp

<section class="py-12 md:py-16 bg-white" style="padding-top: 48px; padding-bottom: 48px;">
    <div class="max-w-[1440px] mx-auto px-4 md:px-8" style="max-width: 1200px; margin: 0 auto; padding: 0 16px;">
        {{-- Section Header --}}
        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 32px;">
            <h2 style="margin: 0; font-size: 24px; font-weight: 700; color: #111;">Tin tức nổi bật</h2>
            {{-- Red Slashes --}}
            <div style="display: flex; gap: 4px; color: #ED1C24; transform: skewX(-20deg);">
                <div style="width: 8px; height: 16px; background-color: #ED1C24;"></div>
                <div style="width: 8px; height: 16px; background-color: #ED1C24;"></div>
                <div style="width: 32px; height: 16px; background-color: #ED1C24;"></div>
            </div>
        </div>

        {{-- Featured Content Grid - Using Flex for robustness --}}
        <div class="featured-flex-container" style="display: flex; flex-wrap: wrap; gap: 32px; align-items: stretch;">
            {{-- Main Featured Card (Left) - ~65% width --}}
            <div style="flex: 1 1 600px; min-width: 300px; display: flex; flex-direction: column;">
                @if($featured)
                    <x-cards.news-card-featured :article="$featured" />
                @endif
            </div>

            {{-- Small Sidebar Items (Right) - ~35% width --}}
            <div style="flex: 0 1 400px; min-width: 300px; display: flex; flex-direction: column;">
                <div style="display: flex; flex-direction: column; height: 100%; justify-content: space-between;">
                    @foreach($others as $article)
                        <x-cards.news-card-small :article="$article" />
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
