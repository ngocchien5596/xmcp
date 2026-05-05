<section class="bg-[var(--color-surface-gray)] py-12 md:py-16">
    <div class="mx-auto max-w-[1440px] px-4 md:px-8">
        @include('components.ui.section-title', ['title' => 'Liên kết'])
        <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:grid-cols-5" data-stagger-container>
            @foreach($partners as $partner)
                @include('components.cards.partner-logo-card', ['partner' => $partner])
            @endforeach
        </div>
    </div>
</section>
