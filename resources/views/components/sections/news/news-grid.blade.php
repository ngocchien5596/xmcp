@props(['items'])

<section class="pb-16 md:pb-24 bg-white" style="padding-bottom: 64px; background-color: #ffffff;">
    <style>
        .news-grid-custom {
            display: grid;
            grid-template-columns: 1fr;
            gap: 32px;
        }
        @media (min-width: 768px) {
            .news-grid-custom {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (min-width: 1024px) {
            .news-grid-custom {
                grid-template-columns: repeat(3, 1fr);
                gap: 48px 32px;
            }
        }
    </style>
    <div class="max-w-[1440px] mx-auto px-4 md:px-8" style="max-width: 1200px; margin: 0 auto; padding: 0 16px;">
        {{-- Grid --}}
        @if(count($items) > 0)
            <div class="news-grid-custom">
                @foreach($items as $article)
                    <div style="display: flex; flex-direction: column;">
                        <x-cards.news-card :article="$article" />
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-24 bg-white border border-gray-100 rounded-sm">
                <p class="text-gray-500 font-medium">Hiện chưa có tin tức nào trong chuyên mục này.</p>
            </div>
        @endif
    </div>
</section>
