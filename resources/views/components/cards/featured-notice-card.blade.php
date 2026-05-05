@props(['item'])

<div class="group relative h-full overflow-hidden rounded-sm motion-border-card">
    <div class="aspect-[16/9] w-full overflow-hidden">
        <img src="{{ $item['image'] }}" 
             alt="{{ $item['title'] }}" 
             class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-110">
    </div>
    <a href="{{ route('notices.show', $item['slug']) }}" 
       class="absolute bottom-0 left-0 right-0 bg-[#ED1C24] p-5 md:p-6 text-white transition-colors hover:bg-black">
        <h2 class="text-lg md:text-xl font-bold line-clamp-2 uppercase leading-tight">{{ $item['title'] }}</h2>
    </a>
</div>
