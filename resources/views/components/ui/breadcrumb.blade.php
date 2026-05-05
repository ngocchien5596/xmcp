<nav class="mb-8 flex items-center gap-2 text-sm text-[var(--color-text-muted)]" aria-label="Breadcrumb">
    <a href="{{ route('home') }}" class="transition-colors hover:text-[var(--color-brand-red)]">Trang chủ</a>
    @foreach($breadcrumbs as $crumb)
        <span>/</span>
        @if(!empty($crumb['href']))
            <a href="{{ $crumb['href'] }}" class="transition-colors hover:text-[var(--color-brand-red)]">{{ $crumb['label'] }}</a>
        @else
            <span class="font-medium text-[var(--color-text-primary)]">{{ $crumb['label'] }}</span>
        @endif
    @endforeach
</nav>
