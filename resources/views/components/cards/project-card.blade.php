<div class="group relative aspect-[4/3] overflow-hidden rounded-sm motion-card motion-border-card reveal reveal-up" data-animate>
    <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" loading="lazy" width="400" height="300" class="h-full w-full object-cover motion-image">
    <div class="absolute inset-0 overlay-black"></div>
    <div class="absolute bottom-0 left-0 right-0 p-5 z-10">
        <span class="text-[10px] font-bold uppercase tracking-wider text-[var(--color-brand-red)]">{{ $project['category'] }}</span>
        <h3 class="mt-1 text-sm font-bold leading-snug text-white line-clamp-2">{{ $project['title'] }}</h3>
    </div>
</div>
