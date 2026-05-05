@php
    $variant = $variant ?? 'primary';
    $href = $href ?? null;
    $classes = 'inline-flex items-center justify-center rounded-sm px-6 py-3 text-sm font-bold uppercase tracking-wider transition-all duration-200';
    if ($variant === 'primary') {
        $classes .= ' bg-[var(--color-brand-red)] text-white hover:bg-[var(--color-brand-hover)]';
    } elseif ($variant === 'outline') {
        $classes .= ' border-2 border-[var(--color-brand-red)] text-[var(--color-brand-red)] hover:bg-[var(--color-brand-red)] hover:text-white';
    } else {
        $classes .= ' bg-white text-[var(--color-text-primary)] hover:bg-[var(--color-surface-gray)]';
    }
@endphp

@if($href)
    <a href="{{ $href }}" class="{{ $classes }}">{{ $slot }}</a>
@else
    <button type="{{ $type ?? 'button' }}" class="{{ $classes }}">{{ $slot }}</button>
@endif
