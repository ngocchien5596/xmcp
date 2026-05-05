<div class="group relative aspect-[4/3] overflow-hidden rounded-sm motion-card motion-border-card reveal reveal-up" data-animate>
    <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" loading="lazy" width="400" height="300" class="h-full w-full object-cover motion-image">
    <div class="absolute inset-0 overlay-black"></div>
    <div class="absolute bottom-0 left-0 right-0 p-5 z-10">
        <p class="text-sm font-semibold leading-snug text-white line-clamp-3">{{ $item['title'] }}</p>
    </div>
</div>
