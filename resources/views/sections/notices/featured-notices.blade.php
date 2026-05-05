@props(['items'])

@php
    $mainItem = $items->first();
    $sideItems = $items->skip(1)->take(3);
@endphp

<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex items-center gap-3 mb-8">
            <div class="w-1.5 h-8 bg-[#ED1C24]"></div>
            <h2 class="text-2xl font-black uppercase tracking-tight text-black">Thông báo nổi bật</h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            {{-- Left Column: Large Card --}}
            <div class="lg:col-span-7">
                @if($mainItem)
                    <x-cards.featured-notice-card :item="$mainItem" />
                @endif
            </div>

            {{-- Right Column: Small Cards --}}
            <div class="lg:col-span-5 flex flex-col gap-6 md:gap-8">
                @foreach($sideItems as $item)
                    <x-cards.small-notice-card :item="$item" />
                @endforeach
            </div>
        </div>
    </div>
</section>
