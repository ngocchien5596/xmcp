@props([
    'barWidth' => 64,
    'size' => 'md',
])

@php
    $sizes = [
        'sm' => [
            'slashHeight' => 'h-4',
            'gap' => 'gap-1.5',
            'strokeGap' => 'gap-[3px]',
            'barHeight' => 'h-4',
            'slashWidths' => ['w-1', 'w-1.5', 'w-2.5'],
        ],
        'md' => [
            'slashHeight' => 'h-5',
            'gap' => 'gap-2',
            'strokeGap' => 'gap-1',
            'barHeight' => 'h-5',
            'slashWidths' => ['w-1', 'w-1.5', 'w-3'],
        ],
        'lg' => [
            'slashHeight' => 'h-6',
            'gap' => 'gap-2',
            'strokeGap' => 'gap-1',
            'barHeight' => 'h-6',
            'slashWidths' => ['w-1.5', 'w-2', 'w-3.5'],
        ],
    ];

    $config = $sizes[$size] ?? $sizes['md'];
@endphp

<div {{ $attributes->merge(['class' => 'brand-mark inline-flex items-center ' . $config['gap'] . ' text-[var(--color-brand-red)]']) }}>
    <span class="brand-mark__slashes inline-flex {{ $config['strokeGap'] }}" aria-hidden="true">
        @foreach ($config['slashWidths'] as $slashWidth)
            <span class="brand-mark__slash {{ $config['slashHeight'] }} {{ $slashWidth }}"></span>
        @endforeach
    </span>

    <span class="brand-mark__bar section-slash-animate {{ $config['barHeight'] }}" style="width: {{ (int) $barWidth }}px;" aria-hidden="true">
        <span class="brand-mark__bar-core"></span>
    </span>

    <span class="brand-mark__slashes inline-flex {{ $config['strokeGap'] }}" aria-hidden="true">
        @foreach (array_reverse($config['slashWidths']) as $slashWidth)
            <span class="brand-mark__slash {{ $config['slashHeight'] }} {{ $slashWidth }}"></span>
        @endforeach
    </span>
</div>
