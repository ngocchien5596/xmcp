<div id="mobile-nav" class="fixed inset-0 z-[100] hidden bg-black/50 lg:hidden" aria-hidden="true">
    <div class="ml-auto flex h-full w-[300px] flex-col bg-white shadow-xl">
        <div class="flex items-center justify-between border-b border-[var(--color-border)] px-4 py-4">
            <span class="text-sm font-bold uppercase text-[var(--color-brand-red)]">Menu</span>
            <button id="mobile-menu-close" class="flex h-8 w-8 items-center justify-center" aria-label="Đóng menu">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M18 6 6 18M6 6l12 12"/></svg>
            </button>
        </div>
        <nav class="flex-1 overflow-y-auto px-4 py-4" aria-label="Menu di động">
            @foreach($menu as $item)
                <a href="{{ $item['href'] }}"
                   class="block border-b border-[var(--color-border)] py-3 text-sm font-semibold uppercase text-[var(--color-text-primary)] transition-colors hover:text-[var(--color-brand-red)]">
                    {{ $item['title'] }}
                </a>
                @if(!empty($item['children']))
                    @foreach($item['children'] as $child)
                        <a href="{{ $child['href'] }}"
                           class="block py-2.5 pl-4 text-[13px] font-medium text-[var(--color-text-secondary)] transition-colors hover:text-[var(--color-brand-red)]">
                            {{ $child['title'] }}
                        </a>
                    @endforeach
                @endif
            @endforeach
        </nav>
    </div>
</div>
