@extends('layouts.app')

@section('content')

    @php $hero = config('page-heroes.products'); @endphp

    @include('sections.common.inner-hero', [
        'title' => $hero['title'],
        'subtitle' => $hero['subtitle'],
        'background' => $hero['background'],
    ])

@php
    $categories = [
        ['label' => 'Tất cả', 'value' => null],
        ['label' => 'Xi măng', 'value' => 'cement'],
        ['label' => 'Clinker', 'value' => 'clinker'],
    ];
@endphp

<x-ui.sticky-category-tabs
    :categories="$categories"
    :currentValue="$currentType"
    baseRoute="products.index"
    queryKey="type"
/>

{{-- ======================== PRODUCT GRID ======================== --}}
<section class="bg-gray-50/60 py-16 md:py-24">
    <div class="mx-auto max-w-[1440px] px-4 md:px-8">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-10" id="product-grid">
            @foreach($products as $index => $product)
                <a href="{{ route('products.show', $product['slug']) }}"
                   class="pcard pcard-reveal block"
                   style="transition-delay: {{ $index * 0.1 }}s;"
                   data-card-index="{{ $index }}">

                    {{-- Type badge --}}
                    <span class="pcard-badge">
                        {{ $product['type'] === 'cement' ? 'Xi măng' : 'Clinker' }}
                    </span>

                    {{-- Image wrapper --}}
                    <div class="relative overflow-hidden">
                        <img src="{{ asset($product['image']) }}"
                             alt="{{ $product['title'] }}"
                             class="pcard-img"
                             loading="lazy"
                             onerror="this.src='https://placehold.co/800x600/ED1C24/FFFFFF?text={{ urlencode($product['title']) }}'">

                        {{-- Use-case ribbon (slides up on hover) --}}
                        @if(!empty($product['use_case']) || !empty($product['usage']))
                            <div class="pcard-use-case">
                                {{ $product['use_case'] ?? $product['usage'] }}
                            </div>
                        @endif
                    </div>

                    {{-- Body --}}
                    <div class="pcard-body">
                        <h2 class="pcard-title">{{ $product['title'] }}</h2>
                        <p class="pcard-subtitle">{{ $product['subtitle'] }}</p>

                        <span class="pcard-cta">
                            Khám phá
                            <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 8h10M9 4l4 4-4 4"/>
                            </svg>
                        </span>
                    </div>
                </a>
            @endforeach
        </div>

    </div>
</section>

@include('sections.common.partner-section', ['partners' => $partners])
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    /* ============================
       1. MOUSE GLOW TRACKER
       ============================ */
    const cards = document.querySelectorAll('.pcard');

    cards.forEach(card => {
        card.addEventListener('mousemove', function (e) {
            const rect = this.getBoundingClientRect();
            this.style.setProperty('--x', (e.clientX - rect.left) + 'px');
            this.style.setProperty('--y', (e.clientY - rect.top) + 'px');
        });
    });

    /* ============================
       2. SCROLL REVEAL (Stagger)
       ============================ */
    const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    if (!prefersReduced) {
        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.12,
            rootMargin: '0px 0px -40px 0px'
        });

        document.querySelectorAll('.pcard-reveal').forEach(function (el) {
            observer.observe(el);
        });
    } else {
        // If reduced motion, show all immediately
        document.querySelectorAll('.pcard-reveal').forEach(function (el) {
            el.classList.add('is-visible');
        });
    }
});
</script>
@endpush
