@props(['product'])

<a href="{{ route('products.show', $product['slug']) }}" class="group relative flex items-center gap-4 overflow-hidden rounded-sm border border-gray-100 p-3 transition-all hover:border-[#ED1C24] hover:bg-gray-50 motion-border-card">
    <div class="w-20 h-16 flex-shrink-0 rounded-sm overflow-hidden bg-gray-100">
        <img src="{{ asset($product['image']) }}" alt="{{ $product['title'] }}" class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-300">
    </div>
    <div class="flex-1 min-w-0">
        <h4 class="text-sm font-bold text-[#ED1C24] truncate group-hover:text-red-700 transition-colors">
            {{ $product['title'] }}
        </h4>
        <p class="text-xs text-gray-500 truncate mt-1">{{ $product['subtitle'] }}</p>
    </div>
</a>
