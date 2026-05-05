@props(['item'])

<div class="group relative flex gap-4 overflow-hidden rounded-sm border border-gray-100 bg-white p-3 transition-all motion-border-card">
    <a href="{{ route('notices.show', $item['slug']) }}" class="flex-shrink-0 w-[140px] h-[90px] overflow-hidden">
        <img src="{{ $item['image'] }}" 
             alt="{{ $item['title'] }}" 
             class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110">
    </a>
    <div class="flex flex-col justify-start py-0.5">
        <a href="{{ route('notices.show', $item['slug']) }}" class="hover:text-[#ED1C24] transition-colors">
            <h3 class="font-bold text-[15px] leading-snug line-clamp-2 text-black">{{ $item['title'] }}</h3>
        </a>
        <p class="mt-1.5 text-gray-500 text-[13px] line-clamp-1">
            {{ $item['excerpt'] }}
        </p>
    </div>
</div>
