<section class="bg-[var(--color-surface-gray)] py-16 md:py-24">
    <div class="mx-auto max-w-[1440px] px-4 md:px-8">
        @include('components.ui.section-title', ['title' => 'Công trình tiêu biểu'])

        <div class="grid grid-cols-1 gap-6 md:grid-cols-3" data-stagger-container>
            @foreach($projects as $project)
                @include('components.cards.project-card', ['project' => $project])
            @endforeach
        </div>
    </div>
</section>
