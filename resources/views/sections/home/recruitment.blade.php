<section class="relative overflow-hidden bg-gradient-to-r from-[#FDF2F4] to-[#C9D6ED] py-16 md:py-24">
    <div class="mx-auto max-w-[1440px] px-4 md:px-8">
        <p class="text-xs font-bold uppercase tracking-widest text-[var(--color-brand-red)] reveal reveal-up" data-animate>{{ $recruitment['subtitle'] }}</p>
        <h2 class="mt-2 text-[28px] font-bold text-[var(--color-text-primary)] md:text-[32px] reveal reveal-up" data-animate data-animate-delay="80">{{ $recruitment['title'] }}</h2>
        <p class="mt-4 max-w-xl text-sm text-[var(--color-text-secondary)] reveal reveal-up" data-animate data-animate-delay="160">{{ $recruitment['description'] }}</p>

        <div class="mt-8 space-y-4" data-stagger-container>
            @foreach($recruitment['features'] as $feature)
                <a href="{{ $feature['href'] }}" class="relative flex items-center gap-3 overflow-hidden rounded-lg border border-[var(--color-border)] bg-white/80 px-6 py-4 transition-all hover:shadow-md hover:border-[var(--color-brand-red)] motion-card motion-border-card reveal reveal-left" data-animate>
                    <svg class="h-5 w-5 shrink-0 text-[var(--color-brand-red)]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><rect x="8" y="2" width="8" height="4" rx="1" ry="1"/></svg>
                    <div>
                        <p class="text-xs font-bold uppercase text-[var(--color-brand-red)]">{{ $feature['title'] }}</p>
                        <p class="text-sm font-medium text-[var(--color-text-primary)]">{{ $feature['label'] }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
