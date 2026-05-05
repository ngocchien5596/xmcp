<section class="bg-white py-16 md:py-24">
    <div class="mx-auto max-w-[1440px] px-4 md:px-8">
        @include('components.ui.section-title', ['title' => 'Tin tức nổi bật'])

        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4" data-stagger-container>
            @foreach($featuredNews as $article)
                @include('components.cards.news-card', ['article' => $article])
            @endforeach
        </div>
    </div>
</section>
