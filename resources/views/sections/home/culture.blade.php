<section class="bg-white py-16 md:py-24">
    <div class="mx-auto max-w-[1440px] px-4 md:px-8">
        @include('components.ui.section-title', ['title' => 'Văn hóa doanh nghiệp'])

        <div class="grid grid-cols-1 gap-6 md:grid-cols-3" data-stagger-container>
            @foreach($cultureItems as $item)
                @include('components.cards.culture-card', ['item' => $item])
            @endforeach
        </div>
    </div>
</section>
