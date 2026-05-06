@props(['items'])

@php
    $featured = $items->first();
    $others = $items->skip(1)->take(4);
@endphp

<section class="py-12 md:py-16 bg-white">
    <div class="max-w-[1440px] mx-auto px-4 md:px-8">

        {{-- Featured Content Grid --}}
        <div class="flex flex-wrap items-stretch gap-8">
            {{-- Main Featured Card (Left) - ~65% width --}}
            <div class="flex min-w-[300px] flex-1 flex-col">
                @if($featured)
                    <x-cards.news-card-featured :article="$featured" />
                @endif
            </div>

            {{-- Small Sidebar Items (Right) - ~35% width --}}
            <div class="flex min-w-[300px] flex-[0_1_420px] flex-col">
                <div class="flex h-full flex-col gap-4">
                    @foreach($others as $article)
                        <x-cards.news-card-small :article="$article" />
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
