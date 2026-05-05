@props([
    'title',
    'size' => 'md',
    'textClass' => 'text-white',
    'wrapperClass' => '',
])

@php
    $sizes = [
        'sm' => [
            'wrapper' => 'gap-2 md:gap-4',
            'icon' => 'w-6 h-8 md:w-8 md:h-10',
            'title' => 'text-lg md:text-2xl lg:text-[28px]',
        ],
        'md' => [
            'wrapper' => 'gap-3 md:gap-6',
            'icon' => 'w-8 h-10 md:w-12 md:h-16',
            'title' => 'text-xl md:text-3xl lg:text-[34px]',
        ],
        'lg' => [
            'wrapper' => 'gap-3 md:gap-6',
            'icon' => 'w-9 h-12 md:w-14 md:h-[72px]',
            'title' => 'text-2xl md:text-4xl lg:text-[40px]',
        ],
    ];

    $config = $sizes[$size] ?? $sizes['md'];
@endphp

<div {{ $attributes->merge(['class' => trim('flex items-center justify-center ' . $config['wrapper'] . ' ' . $wrapperClass)]) }}>
    <svg class="{{ $config['icon'] }} {{ $textClass }} drop-shadow-md" viewBox="0 0 42 60" fill="currentColor" aria-hidden="true">
        <path d="M38.6 57.3c-1.3-.8-13.8-9.4-20.1-23.7C12.3 19.4 17.5 7.6 18.6 5.3c.4-.9-.5-1.7-1.3-1.1C14 6.7 4 16.5 4 33.6c0 14.8 9.5 25.8 11.2 27.6.6.7 1.7.5 2-.4.2-.7-.2-1.9-.9-3-.7-1.1-2-3.8-1.5-6.9.5-3 2.9-4.8 3.5-5.2.8-.6 1.8.2 1.3 1-.7 1.1-1.2 3.1-.2 5.5.9 2.1 2.8 3.8 3.5 4.3.7.6 1.5-.1 1.2-.9-.4-1.2-.7-3.2.5-5.3 1.1-1.9 3.2-3 3.8-3.3.8-.4 1.6.5 1 1.2-.6.8-.9 2.5.1 4.5 1 2 2.7 3.3 3.4 3.8.7.5 1.4-.2 1.1-1-.4-1.1-.6-2.9.6-4.9 1.1-1.8 3.2-2.7 3.8-3 .8-.4 1.5.6 1 1.2-.7.8-.9 2.5.1 4.5.9 1.8 2.5 3 3.1 3.5.7.5 1.3-.3 1-.9z"/>
    </svg>

    <h2 class="{{ $config['title'] }} font-bold uppercase tracking-widest {{ $textClass }} drop-shadow-md">
        {{ $title }}
    </h2>

    <svg class="{{ $config['icon'] }} {{ $textClass }} drop-shadow-md" viewBox="0 0 42 60" fill="currentColor" aria-hidden="true">
        <path d="M3.4 57.3c1.3-.8 13.8-9.4 20.1-23.7C29.7 19.4 24.5 7.6 23.4 5.3c-.4-.9.5-1.7 1.3-1.1C28 6.7 38 16.5 38 33.6c0 14.8-9.5 25.8-11.2 27.6-.6.7-1.7.5-2-.4-.2-.7.2-1.9.9-3 .7-1.1 2-3.8 1.5-6.9-.5-3-2.9-4.8-3.5-5.2-.8-.6-1.8.2-1.3 1 .7 1.1 1.2 3.1.2 5.5-.9 2.1-2.8 3.8-3.5 4.3-.7.6-1.5-.1-1.2-.9.4-1.2.7-3.2-.5-5.3-1.1-1.9-3.2-3-3.8-3.3-.8-.4-1.6.5-1 1.2.6.8.9 2.5-.1 4.5-1 2-2.7 3.3-3.4 3.8-.7.5-1.4-.2-1.1-1 .4-1.1.6-2.9-.6-4.9-1.1-1.8-3.2-2.7-3.8-3-.8-.4-1.5.6-1 1.2.7.8.9 2.5-.1 4.5-.9 1.8-2.5 3-3.1 3.5-.7.5-1.3-.3-1-.9z"/>
    </svg>
</div>
