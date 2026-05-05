@extends('layouts.app')

@section('content')
<style>
    .product-benefit-item::before {
        content: "";
        width: 20px;
        height: 20px;
        margin-top: 3px;
        flex: 0 0 20px;
        border-radius: 4px;
        background-color: #5CB85C;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='none'%3E%3Cpath d='M3 8.2L6.1 11.3L13 4.5' stroke='white' stroke-width='2.2' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: center;
        background-size: 12px 12px;
    }
</style>

<section class="relative flex h-[400px] items-center justify-center overflow-hidden md:h-[500px]">
    <div class="absolute inset-0 bg-[#ED1C24]">
        <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?q=80&w=2000&auto=format&fit=crop" alt="Nhà máy Xi măng Cẩm Phả" class="h-full w-full object-cover">
        <div class="absolute inset-0 bg-[#ED1C24]/80 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-[#ED1C24]/40"></div>
    </div>

    <div class="relative z-10 mx-auto flex w-full max-w-5xl flex-col items-center px-4 text-center">
        <h1 class="mb-6 text-2xl font-bold uppercase tracking-wider text-white drop-shadow-md md:text-4xl lg:text-[42px]">
            Thương hiệu xi măng hàng đầu Việt Nam
        </h1>

        <div class="flex items-center justify-center gap-3 md:gap-6">
            <svg class="h-10 w-8 text-white drop-shadow-md md:h-16 md:w-12" viewBox="0 0 42 60" fill="currentColor">
                <path d="M38.6 57.3c-1.3-.8-13.8-9.4-20.1-23.7C12.3 19.4 17.5 7.6 18.6 5.3c.4-.9-.5-1.7-1.3-1.1C14 6.7 4 16.5 4 33.6c0 14.8 9.5 25.8 11.2 27.6.6.7 1.7.5 2-.4.2-.7-.2-1.9-.9-3-.7-1.1-2-3.8-1.5-6.9.5-3 2.9-4.8 3.5-5.2.8-.6 1.8.2 1.3 1-.7 1.1-1.2 3.1-.2 5.5.9 2.1 2.8 3.8 3.5 4.3.7.6 1.5-.1 1.2-.9-.4-1.2-.7-3.2.5-5.3 1.1-1.9 3.2-3 3.8-3.3.8-.4 1.6.5 1 1.2-.6.8-.9 2.5.1 4.5 1 2 2.7 3.3 3.4 3.8.7.5 1.4-.2 1.1-1-.4-1.1-.6-2.9.6-4.9 1.1-1.8 3.2-2.7 3.8-3 .8-.4 1.5.6 1 1.2-.7.8-.9 2.5.1 4.5.9 1.8 2.5 3 3.1 3.5.7.5 1.3-.3 1-.9z"/>
            </svg>
            <h2 class="text-xl font-bold uppercase tracking-widest text-white drop-shadow-md md:text-3xl lg:text-[34px]">
                Top nhà máy chuẩn ISO 9001:2000
            </h2>
            <svg class="h-10 w-8 text-white drop-shadow-md md:h-16 md:w-12" viewBox="0 0 42 60" fill="currentColor">
                <path d="M3.4 57.3c1.3-.8 13.8-9.4 20.1-23.7C29.7 19.4 24.5 7.6 23.4 5.3c-.4-.9.5-1.7 1.3-1.1C28 6.7 38 16.5 38 33.6c0 14.8-9.5 25.8-11.2 27.6-.6.7-1.7.5-2-.4-.2-.7.2-1.9.9-3 .7-1.1 2-3.8 1.5-6.9-.5-3-2.9-4.8-3.5-5.2-.8-.6-1.8.2-1.3 1 .7 1.1 1.2 3.1.2 5.5-.9 2.1-2.8 3.8-3.5 4.3-.7.6-1.5-.1-1.2-.9.4-1.2.7-3.2-.5-5.3-1.1-1.9-3.2-3-3.8-3.3-.8-.4-1.6.5-1 1.2.6.8.9 2.5-.1 4.5-1 2-2.7 3.3-3.4 3.8-.7.5-1.4-.2-1.1-1 .4-1.1.6-2.9-.6-4.9-1.1-1.8-3.2-2.7-3.8-3-.8-.4-1.5.6-1 1.2.7.8.9 2.5-.1 4.5-.9 1.8-2.5 3-3.1 3.5-.7.5-1.3-.3-1-.9z"/>
            </svg>
        </div>
    </div>

    <div class="absolute bottom-8 left-4 z-20 flex max-w-2xl items-start gap-4 text-white md:bottom-12 md:left-12">
        <svg class="mt-1 h-12 w-12 shrink-0 text-white md:h-16 md:w-16" viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="1.5">
            <polygon points="30,25 50,15 70,25 70,45 50,55 30,45" />
            <polygon points="10,55 30,45 50,55 50,75 30,85 10,75" />
            <polygon points="50,55 70,45 90,55 90,75 70,85 50,75" />
            <circle cx="30" cy="25" r="2" fill="white"/>
            <circle cx="50" cy="15" r="2" fill="white"/>
            <circle cx="70" cy="25" r="2" fill="white"/>
            <circle cx="70" cy="45" r="2" fill="white"/>
            <circle cx="50" cy="55" r="2" fill="white"/>
            <circle cx="30" cy="45" r="2" fill="white"/>
            <circle cx="10" cy="55" r="2" fill="white"/>
            <circle cx="30" cy="85" r="2" fill="white"/>
            <circle cx="90" cy="55" r="2" fill="white"/>
            <circle cx="90" cy="75" r="2" fill="white"/>
        </svg>
        <div class="flex flex-col">
            <h3 class="mb-2 text-xl font-bold uppercase tracking-widest leading-none md:text-2xl">Sản phẩm</h3>
            <p class="text-xs font-medium leading-relaxed opacity-90 md:text-sm">
                Công ty CP xi măng Cẩm Phả áp dụng Hệ thống quản lý chất lượng Quốc tế ISO 9001:2008 đảm bảo kiểm soát chặt chẽ chất lượng sản phẩm từ khâu nhập nguyên liệu.
            </p>
        </div>
    </div>
</section>

<!-- Category Navigation -->
<section class="py-8 md:py-12 bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex flex-wrap justify-center gap-3 md:gap-4">
            <x-ui.tab-button :href="route('products.index')" :active="!$currentType">
                Tất cả
            </x-ui.tab-button>
            <x-ui.tab-button :href="route('products.index', ['type' => 'cement'])" :active="$currentType == 'cement'">
                Xi măng
            </x-ui.tab-button>
            <x-ui.tab-button :href="route('products.index', ['type' => 'clinker'])" :active="$currentType == 'clinker'">
                Clinker
            </x-ui.tab-button>
        </div>
    </div>
</section>

<section class="bg-white">
    <div class="space-y-0">
        @foreach($products as $index => $product)
            <div class="{{ $index % 2 !== 0 ? 'bg-gray-50' : 'bg-white' }} py-16 md:py-24">
                <div class="mx-auto max-w-7xl px-4 md:px-8">
                    <div class="grid grid-cols-1 items-center gap-12 md:gap-20 lg:grid-cols-2">
                        @if($index % 2 === 0)
                            <div class="order-2 lg:order-1">
                                <div class="overflow-hidden rounded-sm border-4 border-white bg-white shadow-2xl motion-border-card">
                                    <img src="{{ $product['image'] }}" alt="{{ $product['title'] }}" class="aspect-[4/3] h-auto w-full bg-gray-50 object-cover" onerror="this.src='https://placehold.co/800x600/ED1C24/FFFFFF?text={{ urlencode($product['title']) }}'">
                                </div>
                            </div>

                            <div class="order-1 lg:order-2">
                                <h2 class="text-2xl font-black tracking-tight text-[#ED1C24] md:text-3xl">{{ $product['title'] }}</h2>
                                <p class="mt-2 text-sm font-medium text-gray-600 md:text-base">{{ $product['subtitle'] }}</p>

                                <div class="mt-6 rounded-sm bg-[#ED1C24] p-4 text-white md:p-6">
                                    <div class="text-center text-lg font-medium leading-tight md:text-xl">
                                        {{ $product['use_case'] ?? $product['usage'] ?? '' }}
                                    </div>
                                </div>

                                <ul class="m-0 mt-6 flex list-none flex-col gap-3 p-0">
                                    @foreach ($product['benefits'] as $benefit)
                                        <li class="product-benefit-item flex items-start gap-3 text-[16px] leading-6 text-[#222]">
                                            <span class="block flex-1 text-left font-medium text-gray-800">{{ $benefit }}</span>
                                        </li>
                                    @endforeach
                                </ul>

                                <a href="{{ route('products.show', $product['slug']) }}" class="mt-10 inline-block rounded-sm bg-[#ED1C24] px-8 py-2.5 font-bold text-white shadow-sm transition-colors hover:bg-red-700">
                                    Khám phá
                                </a>
                            </div>
                        @else
                            <div class="order-1">
                                <h2 class="text-2xl font-black tracking-tight text-[#ED1C24] md:text-3xl">{{ $product['title'] }}</h2>
                                <p class="mt-2 text-sm font-medium text-gray-600 md:text-base">{{ $product['subtitle'] }}</p>

                                <div class="mt-6 rounded-sm bg-[#ED1C24] p-4 text-white md:p-6">
                                    <div class="text-center text-lg font-medium leading-tight md:text-xl">
                                        {{ $product['use_case'] ?? $product['usage'] ?? '' }}
                                    </div>
                                </div>

                                <ul class="m-0 mt-6 flex list-none flex-col gap-3 p-0">
                                    @foreach ($product['benefits'] as $benefit)
                                        <li class="product-benefit-item flex items-start gap-3 text-[16px] leading-6 text-[#222]">
                                            <span class="block flex-1 text-left font-medium text-gray-800">{{ $benefit }}</span>
                                        </li>
                                    @endforeach
                                </ul>

                                <a href="{{ route('products.show', $product['slug']) }}" class="mt-10 inline-block rounded-sm bg-[#ED1C24] px-8 py-2.5 font-bold text-white shadow-sm transition-colors hover:bg-red-700">
                                    Khám phá
                                </a>
                            </div>

                            <div class="order-2">
                                <div class="overflow-hidden rounded-sm border-4 border-white bg-white shadow-2xl motion-border-card">
                                    <img src="{{ $product['image'] }}" alt="{{ $product['title'] }}" class="aspect-[4/3] h-auto w-full bg-gray-50 object-cover" onerror="this.src='https://placehold.co/800x600/ED1C24/FFFFFF?text={{ urlencode($product['title']) }}'">
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

@include('sections.common.partner-section', ['partners' => $partners])
@endsection
